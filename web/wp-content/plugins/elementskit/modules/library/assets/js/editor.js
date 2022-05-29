(function( $ ) {

	'use strict';

	var ElementsKitLibreryData = window.ElementsKitLibreryData || {},
		ElementsKitLibreryEditor,
		ElementsKitLibreryViews,
		ElementsKitLibreryControlsViews,
		ElementsKitLibreryModules;

	ElementsKitLibreryViews = {

		LibraryLayoutView: null,
		LibraryHeaderView: null,
		LibraryLoadingView: null,
		LibraryErrorView: null,
		LibraryBodyView: null,
		LibraryCollectionView: null,
		FiltersCollectionView: null,
		LibraryTabsCollectionView: null,
		LibraryTabsItemView: null,
		FiltersItemView: null,
		LibraryTemplateItemView: null,
		LibraryInsertTemplateBehavior: null,
		LibraryTabsCollection: null,
		LibraryCollection: null,
		CategoriesCollection: null,
		LibraryTemplateModel: null,
		CategoryModel: null,
		TabModel: null,
		KeywordsModel: null,
		KeywordsView: null,
		LibraryPreviewView: null,
		LibraryHeaderBack: null,
		LibraryHeaderInsertButton: null,
		LibraryProButton: null,

		init: function() {

			var self = this;

			self.LibraryTemplateModel = Backbone.Model.extend( {
				defaults: {
					template_id: 0,
					name: '',
					title: '',
					thumbnail: '',
					preview: '',
					source: '',
					package: '',
					livelink: '',
					categories: [],
					keywords: []
				}
			} );

			self.CategoryModel = Backbone.Model.extend( {
				defaults: {
					slug: '',
					title: ''
				}
			} );

			self.CategoryModel = Backbone.Model.extend( {
				defaults: {
					slug: '',
					title: ''
				}
			} );

			self.TabModel = Backbone.Model.extend( {
				defaults: {
					slug: '',
					title: ''
				}
			} );

			self.KeywordsModel = Backbone.Model.extend( {
				defaults: {
					keywords: {}
				}
			} );

			self.LibraryCollection = Backbone.Collection.extend( {
				model: self.LibraryTemplateModel
			} );

			self.CategoriesCollection = Backbone.Collection.extend( {
				model: self.CategoryModel
			} );

			self.LibraryTabsCollection = Backbone.Collection.extend( {
				model: self.TabModel
			} );

			self.LibraryLoadingView = Marionette.ItemView.extend( {
				id: 'elementskit-template-library-loading',
				template: '#view-elementskit-template-library-loading'
			} );

			self.LibraryErrorView = Marionette.ItemView.extend( {
				id: 'elementskit-template-library-error',
				template: '#view-elementskit-template-library-error'
			} );

			self.LibraryHeaderView = Marionette.LayoutView.extend( {

				id: 'elementskit-template-library-header',
				template: '#view-elementskit-template-library-header',

				ui: {
					closeModal: '#elementskit-template-library-header-close-modal'
				},

				events: {
					'click @ui.closeModal': 'onCloseModalClick'
				},

				regions: {
					headerTabs: '#elementskit-template-library-header-tabs',
					headerActions: '#elementskit-template-library-header-actions'
				},

				onCloseModalClick: function() {
					ElementsKitLibreryEditor.closeModal();
				}

			} );

			self.LibraryPreviewView = Marionette.ItemView.extend( {

				template: '#view-elementskit-template-library-preview',

				id: 'elementskit-template-library-preview',

				ui: {
					img: 'img'
				},

				onRender: function() {
					this.ui.img.attr( 'src', this.getOption( 'preview' ) );
				}
			} );

			self.LibraryHeaderBack = Marionette.ItemView.extend( {

				template: '#view-elementskit-template-library-header-back',

				id: 'elementskit-template-library-header-back',

				ui: {
					button: 'button'
				},

				events: {
					'click @ui.button': 'onBackClick',
				},

				onBackClick: function() {
					ElementsKitLibreryEditor.setPreview( 'back' );
				}

			} );

			self.LibraryInsertTemplateBehavior = Marionette.Behavior.extend( {
				ui: {
					insertButton: '.elementskit-template-library-template-insert'
				},

				events: {
					'click @ui.insertButton': 'onInsertButtonClick'
				},

				onInsertButtonClick: function() {

					var templateModel = this.view.model,
						options       = {};

					ElementsKitLibreryEditor.layout.showLoadingView();

					////console.log(templateModel.get( 'template_id' ));
					elementor.templates.requestTemplateContent(
						templateModel.get( 'source' ),
						templateModel.get( 'template_id' ),
						{
							data: {
								tab: ElementsKitLibreryEditor.getTab(),
								page_settings: true
							},
							success: function( data ) {


								if ( data.licenseError ) {
									ElementsKitLibreryEditor.layout.showLicenseError();
									return;
								}

								ElementsKitLibreryEditor.closeModal();

								elementor.channels.data.trigger( 'template:before:insert', templateModel );

								if ( null !== ElementsKitLibreryEditor.atIndex ) {
									options.at = ElementsKitLibreryEditor.atIndex;
								}

								//console.log(data.content);
								//console.log(window.ElementModel);
								elementor.sections.currentView.addChildModel( data.content, options );

								if ( data.page_settings ) {
									elementor.settings.page.model.set( data.page_settings );
								}

								elementor.channels.data.trigger( 'template:after:insert', templateModel );

								ElementsKitLibreryEditor.atIndex = null;

							}
						}
					);
				}
			} );

			self.LibraryHeaderInsertButton = Marionette.ItemView.extend( {

				template: '#view-elementskit-template-library-insert-button',

				id: 'elementskit-template-library-insert-button',

				behaviors: {
					insertTemplate: {
						behaviorClass: self.LibraryInsertTemplateBehavior
					}
				}

			} );

			self.LibraryProButton = Marionette.ItemView.extend( {

				template: '#view-elementskit-template-library-pro-button',

				id: 'elementskit-template-library-pro-button',

			} );

			self.LibraryTemplateItemView = Marionette.ItemView.extend( {

				template: '#view-elementskit-template-library-item',

				className: function() {

					var urlClass    = ' elementskit-template-has-url',
						sourceClass = ' elementor-template-library-template-';

					if ( '' === this.model.get( 'preview' ) ) {
						urlClass = ' elementskit-template-no-url';
					}

					if ( 'elementskit-local' === this.model.get( 'source' ) ) {
						sourceClass += 'local';
					} else {
						sourceClass += 'remote';
                    }

					return 'elementor-template-library-template' + sourceClass + urlClass;
				},

				ui: function() {
					return {
						previewButton: '.elementor-template-library-template-preview',
					};
				},

				events: function() {
					return {
						'click @ui.previewButton': 'onPreviewButtonClick',
					};
				},

				onPreviewButtonClick: function() {

					if ( '' === this.model.get( 'preview' ) ) {
						return;
					}

					ElementsKitLibreryEditor.setPreview( this.model );
				},

				behaviors: {
					insertTemplate: {
						behaviorClass: self.LibraryInsertTemplateBehavior
					}
				}
			} );

			self.FiltersItemView = Marionette.ItemView.extend( {

				template: '#view-elementskit-template-library-filters-item',

				className: function() {
					return 'elementskit-filter-item';
				},

				ui: function() {
					return {
						filterLabels: '.elementskit-template-library-filter-label'
					};
				},

				events: function() {
					return {
						'click @ui.filterLabels': 'onFilterClick'
					};
				},

				onFilterClick: function( event ) {

					var $clickedInput = jQuery( event.target );

					ElementsKitLibreryEditor.setFilter( 'category', $clickedInput.val() );
				}

			} );

			self.LibraryTabsItemView = Marionette.ItemView.extend( {

				template: '#view-elementskit-template-library-tabs-item',

				className: function() {
					return 'elementor-template-library-menu-item';
				},

				ui: function() {
					return {
						tabsLabels: 'label',
						tabsInput: 'input'
					};
				},

				events: function() {
					return {
						'click @ui.tabsLabels': 'onTabClick'
					};
				},

				onRender: function() {
					if ( this.model.get( 'slug' ) === ElementsKitLibreryEditor.getTab() ) {
						this.ui.tabsInput.attr( 'checked', 'checked' );
					}
				},

				onTabClick: function( event ) {

					var $clickedInput = jQuery( event.target );
					ElementsKitLibreryEditor.setTab( $clickedInput.val() );
					ElementsKitLibreryEditor.setFilter( 'keyword', '' );
				}

			} );

			self.LibraryCollectionView = Marionette.CompositeView.extend( {

				template: '#view-elementskit-template-library-templates',

				id: 'elementskit-template-library-templates',

				childViewContainer: '#elementskit-template-library-templates-container',

				initialize: function() {
					this.listenTo( ElementsKitLibreryEditor.channels.templates, 'filter:change', this._renderChildren );
				},

				filter: function( childModel ) {

					var filter  = ElementsKitLibreryEditor.getFilter( 'category' ),
						keyword = ElementsKitLibreryEditor.getFilter( 'keyword' );

					if ( ! filter && ! keyword ) {
						return true;
					}

					if ( keyword && ! filter ) {
						return _.contains( childModel.get( 'keywords' ), keyword );
					}

					if ( filter && ! keyword ) {
						return _.contains( childModel.get( 'categories' ), filter );
					}

					return _.contains( childModel.get( 'categories' ), filter ) && _.contains( childModel.get( 'keywords' ), keyword );

				},

				getChildView: function( childModel ) {
					return self.LibraryTemplateItemView;
				},

				onRenderCollection: function() {

					var container = this.$childViewContainer,
						items     = this.$childViewContainer.children(),
						tab       = ElementsKitLibreryEditor.getTab();

					if ( 'elementskit_page' === tab || 'local' === tab ) {
						return;
					}

					setTimeout( function() {
						self.masonry.init({
							container: container,
							items: items,
						});
					}, 200 );

				}

			} );

			self.LibraryTabsCollectionView = Marionette.CompositeView.extend({

				template: '#view-elementskit-template-library-tabs',

				childViewContainer: '#elementskit-template-library-tabs-items',

				initialize: function() {
				},

				getChildView: function( childModel ) {
					return self.LibraryTabsItemView;
				}

			} );

			self.FiltersCollectionView = Marionette.CompositeView.extend({

				id: 'elementskit-template-library-filters',

				template: '#view-elementskit-template-library-filters',

				childViewContainer: '#elementskit-template-library-filters-container',

				getChildView: function( childModel ) {
					return self.FiltersItemView;
				}

			} );

			self.LibraryBodyView = Marionette.LayoutView.extend({

				id: 'elementskit-template-library-content',

				className: function() {
					return 'library-tab-' + ElementsKitLibreryEditor.getTab();
				},

				template: '#view-elementskit-template-library-content',

				regions: {
					contentTemplates: '.elementskit-templates-list',
					contentFilters: '.elementskit-filters-list',
					contentKeywords: '.elementskit-keywords-list'
				}

			} );

			self.LibraryLayoutView = Marionette.LayoutView.extend( {

				el: '#elementskit-template-library-modal',

				regions: ElementsKitLibreryData.modalRegions,

				initialize: function() {

					this.getRegion( 'modalHeader' ).show( new self.LibraryHeaderView() );
					this.listenTo( ElementsKitLibreryEditor.channels.tabs, 'filter:change', this.switchTabs );
					this.listenTo( ElementsKitLibreryEditor.channels.layout, 'preview:change', this.switchPreview );

				},

				switchTabs: function() {
					this.showLoadingView();
					ElementsKitLibreryEditor.setFilter( 'keyword', '' );
					ElementsKitLibreryEditor.requestTemplates( ElementsKitLibreryEditor.getTab() );
				},

				switchPreview: function() {

					var header  = this.getHeaderView(),
						preview = ElementsKitLibreryEditor.getPreview();

					if ( 'back' === preview ) {

						header.headerTabs.show( new self.LibraryTabsCollectionView( {
							collection: ElementsKitLibreryEditor.collections.tabs
						} ) );

						header.headerActions.empty();

						ElementsKitLibreryEditor.setTab( ElementsKitLibreryEditor.getTab() );
						return;
					}

					if ( 'initial' === preview ) {
						header.headerActions.empty();
						return;
					}

					this.getRegion( 'modalContent' ).show( new self.LibraryPreviewView( {
						'preview': preview.get( 'preview' )
					} ) );

                    header.headerTabs.show( new self.LibraryHeaderBack() );
                    
					// insert-preview

					if(preview.get('package') == 'pro'&& ElementsKitLibreryData.license.activated != true){
						header.headerActions.show( new self.LibraryProButton( {
								model: preview
							})
						);
					}else{
						header.headerActions.show( new self.LibraryHeaderInsertButton( {
								model: preview
							})
						);
					}

				},

				getHeaderView: function() {
					return this.getRegion( 'modalHeader' ).currentView;
				},

				getContentView: function() {
					return this.getRegion( 'modalContent' ).currentView;
				},

				showLoadingView: function() {
					this.modalContent.show( new self.LibraryLoadingView() );
				},

				showLicenseError: function() {
					this.modalContent.show( new self.LibraryErrorView() );
				},

				showTemplatesView: function( templatesCollection, categoriesCollection, keywords ) {

					this.getRegion( 'modalContent' ).show( new self.LibraryBodyView() );

					var contentView   = this.getContentView(),
						header        = this.getHeaderView(),
						keywordsModel = new self.KeywordsModel( {
							keywords: keywords
						} );

					ElementsKitLibreryEditor.collections.tabs = new self.LibraryTabsCollection( ElementsKitLibreryEditor.getTabs() );

					header.headerTabs.show( new self.LibraryTabsCollectionView( {
						collection: ElementsKitLibreryEditor.collections.tabs
					} ) );

					contentView.contentTemplates.show( new self.LibraryCollectionView( {
						collection: templatesCollection
					} ) );

					contentView.contentFilters.show( new self.FiltersCollectionView( {
						collection: categoriesCollection
					} ) );
				}

			} );
		},

		masonry: {

			self: {},
			elements: {},

			init: function( settings ) {

				var self = this;
				self.settings = $.extend( self.getDefaultSettings(), settings );
				self.elements = self.getDefaultElements();

				self.run();
			},

			getSettings: function( key ) {
				if ( key ) {
					return this.settings[ key ];
				} else {
					return this.settings;
				}
			},

			getDefaultSettings: function() {
				return {
					container: null,
					items: null,
					columnsCount: 3,
					verticalSpaceBetween: 30
				};
			},

			getDefaultElements: function() {
				return {
					$container: jQuery( this.getSettings( 'container' ) ),
					$items: jQuery( this.getSettings( 'items' ) )
				};
			},

			run: function() {
				var heights = [],
					distanceFromTop = this.elements.$container.position().top,
					settings = this.getSettings(),
					columnsCount = settings.columnsCount;

				distanceFromTop += parseInt( this.elements.$container.css( 'margin-top' ), 10 );

				this.elements.$container.height( '' );

				this.elements.$items.each( function( index ) {
					var row = Math.floor( index / columnsCount ),
						indexAtRow = index % columnsCount,
						$item = jQuery( this ),
						itemPosition = $item.position(),
						itemHeight = $item[0].getBoundingClientRect().height + settings.verticalSpaceBetween;

					if ( row ) {
						var pullHeight = itemPosition.top - distanceFromTop - heights[ indexAtRow ];
						pullHeight -= parseInt( $item.css( 'margin-top' ), 10 );
						pullHeight *= -1;
						$item.css( 'margin-top', pullHeight + 'px' );
						heights[ indexAtRow ] += itemHeight;
					} else {
						heights.push( itemHeight );
					}
				} );

				this.elements.$container.height( Math.max.apply( Math, heights ) );
			}
		}

	};

	ElementsKitLibreryControlsViews = {

		ElementsKitSearchView: null,

		init: function() {

			var self = this;

			self.ElementsKitSearchView = window.elementor.modules.controls.BaseData.extend( {

				onReady: function() {

					var action      = this.model.attributes.action,
						queryParams = this.model.attributes.query_params;

					this.ui.select.find( 'option' ).each(function(index, el) {
						$( this ).attr( 'selected', true );
					});

					this.ui.select.select2( {
						ajax: {
							url: function() {

								var query = '';

								if ( queryParams.length > 0 ) {
									$.each( queryParams, function( index, param ) {

										if ( window.elementor.settings.page.model.attributes[ param ] ) {
											query += '&' + param + '=' + window.elementor.settings.page.model.attributes[ param ];
										}
									});
								}

								return ajaxurl + '?action=' + action + query;
							},
							dataType: 'json'
						},
						placeholder: 'Please enter 3 or more characters',
						minimumInputLength: 3
					} );

				},

				onBeforeDestroy: function() {

					if ( this.ui.select.data( 'select2' ) ) {
						this.ui.select.select2( 'destroy' );
					}

					this.$el.remove();
				}

			} );

			window.elementor.addControlView( 'elementskit_search', self.ElementsKitSearchView );

		}

	};

	ElementsKitLibreryModules = {

		getDataToSave: function( data ) {
			data.id = window.elementor.config.post_id;
			return data;
		},

		init: function() {

			if ( window.elementor.settings.elementskit_template ) {
				window.elementor.settings.elementskit_template.getDataToSave = this.getDataToSave;
			}

			if ( window.elementor.settings.elementskit_page ) {
				window.elementor.settings.elementskit_page.getDataToSave = this.getDataToSave;
				window.elementor.settings.elementskit_page.changeCallbacks = {
					custom_header: function() {
						this.save( function() {
							elementor.reloadPreview();

							elementor.once( 'preview:loaded', function() {
								elementor.getPanelView().setPage( 'elementskit_page_settings' );
							} );
						} );
					},
					custom_footer: function() {
						this.save( function() {
							elementor.reloadPreview();

							elementor.once( 'preview:loaded', function() {
								elementor.getPanelView().setPage( 'elementskit_page_settings' );
							} );
						} );
					}
				};
			}

		}

	};

	ElementsKitLibreryEditor = {

		modal: false,
		layout: false,
		collections: {},
		tabs: {},
		defaultTab: '',
		channels: {},
		atIndex: null,

		init: function() {

			window.elementor.on(
				'preview:loaded',
				window._.bind( ElementsKitLibreryEditor.onPreviewLoaded, ElementsKitLibreryEditor )
			);

			ElementsKitLibreryViews.init();
			ElementsKitLibreryControlsViews.init();
			//ElementsKitLibreryModules.init();

		},

		onPreviewLoaded: function() {

			this.initAizenButton();

			window.elementor.$previewContents.on(
				'click.addElementsKitTemplate',
				'.add-elementskit-template',
				_.bind( this.showTemplatesModal, this )
			);

			this.channels = {
				templates: Backbone.Radio.channel( 'EKIT_THEME_EDITOR:templates' ),
				tabs: Backbone.Radio.channel( 'EKIT_THEME_EDITOR:tabs' ),
				layout: Backbone.Radio.channel( 'EKIT_THEME_EDITOR:layout' ),
			};

			this.tabs       = ElementsKitLibreryData.tabs;
			this.defaultTab = ElementsKitLibreryData.defaultTab;

		},

		initAizenButton: function() {
			////console.log(['test', ElementsKitLibreryData]);
			var $addNewSection = window.elementor.$previewContents.find( '.elementor-add-new-section' ),
				addElementsKitTemplate = '<button class="add-elementskit-template ekit-wid-con" type="button"><i class="icon icon-ekit"></i></button>',
				$addElementsKitTemplate;

			////console.log(ElementsKitLibreryData.libraryButton);
			if ( $addNewSection.length && ElementsKitLibreryData.libraryButton ) {
				$addElementsKitTemplate = $( addElementsKitTemplate ).prependTo( $addNewSection );
			}

			window.elementor.$previewContents.on(
				'click.addElementsKitTemplate',
				'.elementor-editor-section-settings .elementor-editor-element-add',
				function() {

					var $this    = $( this ),
						$section = $this.closest( '.elementor-top-section' ),
						modelID  = $section.data( 'model-cid' );

					if ( window.elementor.sections.currentView.collection.length ) {
						$.each( window.elementor.sections.currentView.collection.models, function( index, model ) {
							if ( modelID === model.cid ) {
								ElementsKitLibreryEditor.atIndex = index;
							}
						});
					}

					if ( ElementsKitLibreryData.libraryButton ) {
						setTimeout( function() {
							var $addNew = $section.prev( '.elementor-add-section' ).find( '.elementor-add-new-section' );
							$addNew.prepend( addElementsKitTemplate );
						}, 100 );
					}

				}
			);
		},

		getFilter: function( name ) {
			return this.channels.templates.request( 'filter:' + name );
		},

		setFilter: function( name, value ) {
			this.channels.templates.reply( 'filter:' + name, value );
			this.channels.templates.trigger( 'filter:change' );
		},

		getTab: function() {
			return this.channels.tabs.request( 'filter:tabs' );
		},

		setTab: function( value, silent ) {

			this.channels.tabs.reply( 'filter:tabs', value );

			if ( ! silent ) {
				this.channels.tabs.trigger( 'filter:change' );
			}

		},

		getTabs: function() {

			var tabs = [];

			_.each( this.tabs, function( item, slug ) {
				tabs.push({
					slug: slug,
					title: item.title
				});
			} );

			return tabs;
		},

		getPreview: function( name ) {
			return this.channels.layout.request( 'preview' );
		},

		setPreview: function( value, silent ) {

			this.channels.layout.reply( 'preview', value );

			if ( ! silent ) {
				this.channels.layout.trigger( 'preview:change' );
			}
		},

		getKeywords: function() {

			var keywords = [];

			_.each( this.keywords, function( title, slug ) {
				tabs.push({
					slug: slug,
					title: title
				});
			} );

			return keywords;
		},

		showTemplatesModal: function() {

			this.getModal().show();

			if ( ! this.layout ) {
				this.layout = new ElementsKitLibreryViews.LibraryLayoutView();
				this.layout.showLoadingView();
			}

			this.setTab( this.defaultTab, true );
			this.requestTemplates( this.defaultTab );
			this.setPreview( 'initial' );

		},

		requestTemplates: function( tabName ) {

			var self = this,
				tab  = self.tabs[ tabName ];

			self.setFilter( 'category', false );

			if ( tab.data.templates && tab.data.categories ) {
				self.layout.showTemplatesView( tab.data.templates, tab.data.categories, tab.data.keywords );
			} else {
				$.ajax({
					url: ajaxurl,
					type: 'get',
					dataType: 'json',
					data: {
						action: 'elementskit_get_layouts',
						tab: tabName,
					},
					success: function( response ) {

						var templates  = new ElementsKitLibreryViews.LibraryCollection( response.data.templates ),
							categories = new ElementsKitLibreryViews.CategoriesCollection( response.data.categories );

						self.tabs[ tabName ].data = {
							templates: templates,
							categories: categories,
							keywords: response.data.keywords
						};

						////console.log(self.tabs);

						self.layout.showTemplatesView( templates, categories, response.data.keywords );
					}
				});
			}

		},

		closeModal: function() {
			this.getModal().hide();
		},

		getModal: function() {

			if ( ! this.modal ) {
				this.modal = elementor.dialogsManager.createWidget( 'lightbox', {
					id: 'elementskit-template-library-modal',
					closeButton: false
				} );
			}

			return this.modal;

		}

	};

	$( window ).on( 'elementor:init', ElementsKitLibreryEditor.init );

})( jQuery );