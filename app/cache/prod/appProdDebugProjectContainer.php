<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appProdDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.cache_clear_metadata_command' => 'getDoctrine_CacheClearMetadataCommandService',
            'doctrine.cache_clear_query_cache_command' => 'getDoctrine_CacheClearQueryCacheCommandService',
            'doctrine.cache_clear_result_command' => 'getDoctrine_CacheClearResultCommandService',
            'doctrine.cache_collection_region_command' => 'getDoctrine_CacheCollectionRegionCommandService',
            'doctrine.clear_entity_region_command' => 'getDoctrine_ClearEntityRegionCommandService',
            'doctrine.clear_query_region_command' => 'getDoctrine_ClearQueryRegionCommandService',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService',
            'doctrine.database_import_command' => 'getDoctrine_DatabaseImportCommandService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.ensure_production_settings_command' => 'getDoctrine_EnsureProductionSettingsCommandService',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService',
            'doctrine.mapping_convert_command' => 'getDoctrine_MappingConvertCommandService',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService',
            'doctrine.mapping_info_command' => 'getDoctrine_MappingInfoCommandService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine.query_dql_command' => 'getDoctrine_QueryDqlCommandService',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService',
            'doctrine.schema_create_command' => 'getDoctrine_SchemaCreateCommandService',
            'doctrine.schema_drop_command' => 'getDoctrine_SchemaDropCommandService',
            'doctrine.schema_update_command' => 'getDoctrine_SchemaUpdateCommandService',
            'doctrine.schema_validate_command' => 'getDoctrine_SchemaValidateCommandService',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'fm_elfinder.configurator.default' => 'getFmElfinder_Configurator_DefaultService',
            'fm_elfinder.form.type' => 'getFmElfinder_Form_TypeService',
            'fm_elfinder.loader.default' => 'getFmElfinder_Loader_DefaultService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_user.change_password.controller' => 'getFosUser_ChangePassword_ControllerService',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.command.activate_user' => 'getFosUser_Command_ActivateUserService',
            'fos_user.command.change_password' => 'getFosUser_Command_ChangePasswordService',
            'fos_user.command.create_user' => 'getFosUser_Command_CreateUserService',
            'fos_user.command.deactivate_user' => 'getFosUser_Command_DeactivateUserService',
            'fos_user.command.demote_user' => 'getFosUser_Command_DemoteUserService',
            'fos_user.command.promote_user' => 'getFosUser_Command_PromoteUserService',
            'fos_user.listener.authentication' => 'getFosUser_Listener_AuthenticationService',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.controller' => 'getFosUser_Profile_ControllerService',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.controller' => 'getFosUser_Registration_ControllerService',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.controller' => 'getFosUser_Resetting_ControllerService',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.controller' => 'getFosUser_Security_ControllerService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.user_provider.username_email' => 'getFosUser_UserProvider_UsernameEmailService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.canonical_fields_updater' => 'getFosUser_Util_CanonicalFieldsUpdaterService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.password_updater' => 'getFosUser_Util_PasswordUpdaterService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'http\\httplugbundle\\collector\\pluginclientfactorylistener' => 'getHttp_Httplugbundle_Collector_PluginclientfactorylistenerService',
            'http_kernel' => 'getHttpKernelService',
            'httplug.async_client.default' => 'getHttplug_AsyncClient_DefaultService',
            'httplug.auto_discovery.auto_discovered_client' => 'getHttplug_AutoDiscovery_AutoDiscoveredClientService',
            'httplug.client.default' => 'getHttplug_Client_DefaultService',
            'httplug.collector.collector' => 'getHttplug_Collector_CollectorService',
            'httplug.collector.formatter' => 'getHttplug_Collector_FormatterService',
            'httplug.message_factory.default' => 'getHttplug_MessageFactory_DefaultService',
            'httplug.strategy' => 'getHttplug_StrategyService',
            'httplug.stream_factory.default' => 'getHttplug_StreamFactory_DefaultService',
            'httplug.uri_factory.default' => 'getHttplug_UriFactory_DefaultService',
            'ivory.google_map.form.type.place_autocomplete' => 'getIvory_GoogleMap_Form_Type_PlaceAutocompleteService',
            'ivory.google_map.helper.api' => 'getIvory_GoogleMap_Helper_ApiService',
            'ivory.google_map.helper.api.event_dispatcher' => 'getIvory_GoogleMap_Helper_Api_EventDispatcherService',
            'ivory.google_map.helper.collector.base.bound' => 'getIvory_GoogleMap_Helper_Collector_Base_BoundService',
            'ivory.google_map.helper.collector.base.coordinate' => 'getIvory_GoogleMap_Helper_Collector_Base_CoordinateService',
            'ivory.google_map.helper.collector.base.point' => 'getIvory_GoogleMap_Helper_Collector_Base_PointService',
            'ivory.google_map.helper.collector.base.size' => 'getIvory_GoogleMap_Helper_Collector_Base_SizeService',
            'ivory.google_map.helper.collector.control.custom' => 'getIvory_GoogleMap_Helper_Collector_Control_CustomService',
            'ivory.google_map.helper.collector.event.dom_event' => 'getIvory_GoogleMap_Helper_Collector_Event_DomEventService',
            'ivory.google_map.helper.collector.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Collector_Event_DomEventOnceService',
            'ivory.google_map.helper.collector.event.event' => 'getIvory_GoogleMap_Helper_Collector_Event_EventService',
            'ivory.google_map.helper.collector.event.event_once' => 'getIvory_GoogleMap_Helper_Collector_Event_EventOnceService',
            'ivory.google_map.helper.collector.layer.geo_json' => 'getIvory_GoogleMap_Helper_Collector_Layer_GeoJsonService',
            'ivory.google_map.helper.collector.layer.heatmap' => 'getIvory_GoogleMap_Helper_Collector_Layer_HeatmapService',
            'ivory.google_map.helper.collector.layer.kml' => 'getIvory_GoogleMap_Helper_Collector_Layer_KmlService',
            'ivory.google_map.helper.collector.overlay.circle' => 'getIvory_GoogleMap_Helper_Collector_Overlay_CircleService',
            'ivory.google_map.helper.collector.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Collector_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.collector.overlay.extendable' => 'getIvory_GoogleMap_Helper_Collector_Overlay_ExtendableService',
            'ivory.google_map.helper.collector.overlay.ground_overlay' => 'getIvory_GoogleMap_Helper_Collector_Overlay_GroundOverlayService',
            'ivory.google_map.helper.collector.overlay.icon' => 'getIvory_GoogleMap_Helper_Collector_Overlay_IconService',
            'ivory.google_map.helper.collector.overlay.icon_sequence' => 'getIvory_GoogleMap_Helper_Collector_Overlay_IconSequenceService',
            'ivory.google_map.helper.collector.overlay.info_box' => 'getIvory_GoogleMap_Helper_Collector_Overlay_InfoBoxService',
            'ivory.google_map.helper.collector.overlay.info_window' => 'getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindowService',
            'ivory.google_map.helper.collector.overlay.info_window.default' => 'getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindow_DefaultService',
            'ivory.google_map.helper.collector.overlay.marker' => 'getIvory_GoogleMap_Helper_Collector_Overlay_MarkerService',
            'ivory.google_map.helper.collector.overlay.marker_shape' => 'getIvory_GoogleMap_Helper_Collector_Overlay_MarkerShapeService',
            'ivory.google_map.helper.collector.overlay.polygon' => 'getIvory_GoogleMap_Helper_Collector_Overlay_PolygonService',
            'ivory.google_map.helper.collector.overlay.polyline' => 'getIvory_GoogleMap_Helper_Collector_Overlay_PolylineService',
            'ivory.google_map.helper.collector.overlay.rectangle' => 'getIvory_GoogleMap_Helper_Collector_Overlay_RectangleService',
            'ivory.google_map.helper.collector.overlay.symbol' => 'getIvory_GoogleMap_Helper_Collector_Overlay_SymbolService',
            'ivory.google_map.helper.collector.place.autocomplete.base.bound' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_BoundService',
            'ivory.google_map.helper.collector.place.autocomplete.base.coordinate' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_CoordinateService',
            'ivory.google_map.helper.collector.place.autocomplete.event.dom_event' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventService',
            'ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventOnceService',
            'ivory.google_map.helper.collector.place.autocomplete.event.event' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventService',
            'ivory.google_map.helper.collector.place.autocomplete.event.event_once' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventOnceService',
            'ivory.google_map.helper.collector.static.encoded_polyline' => 'getIvory_GoogleMap_Helper_Collector_Static_EncodedPolylineService',
            'ivory.google_map.helper.collector.static.extendable' => 'getIvory_GoogleMap_Helper_Collector_Static_ExtendableService',
            'ivory.google_map.helper.collector.static.marker' => 'getIvory_GoogleMap_Helper_Collector_Static_MarkerService',
            'ivory.google_map.helper.collector.static.polyline' => 'getIvory_GoogleMap_Helper_Collector_Static_PolylineService',
            'ivory.google_map.helper.formatter' => 'getIvory_GoogleMap_Helper_FormatterService',
            'ivory.google_map.helper.json_builder' => 'getIvory_GoogleMap_Helper_JsonBuilderService',
            'ivory.google_map.helper.map' => 'getIvory_GoogleMap_Helper_MapService',
            'ivory.google_map.helper.map.event_dispatcher' => 'getIvory_GoogleMap_Helper_Map_EventDispatcherService',
            'ivory.google_map.helper.map.static' => 'getIvory_GoogleMap_Helper_Map_StaticService',
            'ivory.google_map.helper.map.static.event_dispatcher' => 'getIvory_GoogleMap_Helper_Map_Static_EventDispatcherService',
            'ivory.google_map.helper.place_autocomplete' => 'getIvory_GoogleMap_Helper_PlaceAutocompleteService',
            'ivory.google_map.helper.place_autocomplete.event_dispatcher' => 'getIvory_GoogleMap_Helper_PlaceAutocomplete_EventDispatcherService',
            'ivory.google_map.helper.renderer.api' => 'getIvory_GoogleMap_Helper_Renderer_ApiService',
            'ivory.google_map.helper.renderer.api_init' => 'getIvory_GoogleMap_Helper_Renderer_ApiInitService',
            'ivory.google_map.helper.renderer.base.bound' => 'getIvory_GoogleMap_Helper_Renderer_Base_BoundService',
            'ivory.google_map.helper.renderer.base.coordinate' => 'getIvory_GoogleMap_Helper_Renderer_Base_CoordinateService',
            'ivory.google_map.helper.renderer.base.point' => 'getIvory_GoogleMap_Helper_Renderer_Base_PointService',
            'ivory.google_map.helper.renderer.base.size' => 'getIvory_GoogleMap_Helper_Renderer_Base_SizeService',
            'ivory.google_map.helper.renderer.control.custom' => 'getIvory_GoogleMap_Helper_Renderer_Control_CustomService',
            'ivory.google_map.helper.renderer.control.fullscreen' => 'getIvory_GoogleMap_Helper_Renderer_Control_FullscreenService',
            'ivory.google_map.helper.renderer.control.manager' => 'getIvory_GoogleMap_Helper_Renderer_Control_ManagerService',
            'ivory.google_map.helper.renderer.control.map_type' => 'getIvory_GoogleMap_Helper_Renderer_Control_MapTypeService',
            'ivory.google_map.helper.renderer.control.map_type_style' => 'getIvory_GoogleMap_Helper_Renderer_Control_MapTypeStyleService',
            'ivory.google_map.helper.renderer.control.position' => 'getIvory_GoogleMap_Helper_Renderer_Control_PositionService',
            'ivory.google_map.helper.renderer.control.rotate' => 'getIvory_GoogleMap_Helper_Renderer_Control_RotateService',
            'ivory.google_map.helper.renderer.control.scale' => 'getIvory_GoogleMap_Helper_Renderer_Control_ScaleService',
            'ivory.google_map.helper.renderer.control.scale_style' => 'getIvory_GoogleMap_Helper_Renderer_Control_ScaleStyleService',
            'ivory.google_map.helper.renderer.control.street_view' => 'getIvory_GoogleMap_Helper_Renderer_Control_StreetViewService',
            'ivory.google_map.helper.renderer.control.zoom' => 'getIvory_GoogleMap_Helper_Renderer_Control_ZoomService',
            'ivory.google_map.helper.renderer.control.zoom_style' => 'getIvory_GoogleMap_Helper_Renderer_Control_ZoomStyleService',
            'ivory.google_map.helper.renderer.event.dom_event' => 'getIvory_GoogleMap_Helper_Renderer_Event_DomEventService',
            'ivory.google_map.helper.renderer.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Renderer_Event_DomEventOnceService',
            'ivory.google_map.helper.renderer.event.event' => 'getIvory_GoogleMap_Helper_Renderer_Event_EventService',
            'ivory.google_map.helper.renderer.event.event_once' => 'getIvory_GoogleMap_Helper_Renderer_Event_EventOnceService',
            'ivory.google_map.helper.renderer.geometry.encoding' => 'getIvory_GoogleMap_Helper_Renderer_Geometry_EncodingService',
            'ivory.google_map.helper.renderer.html.javascript_tag' => 'getIvory_GoogleMap_Helper_Renderer_Html_JavascriptTagService',
            'ivory.google_map.helper.renderer.html.stylesheet' => 'getIvory_GoogleMap_Helper_Renderer_Html_StylesheetService',
            'ivory.google_map.helper.renderer.html.stylesheet_tag' => 'getIvory_GoogleMap_Helper_Renderer_Html_StylesheetTagService',
            'ivory.google_map.helper.renderer.html.tag' => 'getIvory_GoogleMap_Helper_Renderer_Html_TagService',
            'ivory.google_map.helper.renderer.layer.geo_json' => 'getIvory_GoogleMap_Helper_Renderer_Layer_GeoJsonService',
            'ivory.google_map.helper.renderer.layer.heatmap' => 'getIvory_GoogleMap_Helper_Renderer_Layer_HeatmapService',
            'ivory.google_map.helper.renderer.layer.kml' => 'getIvory_GoogleMap_Helper_Renderer_Layer_KmlService',
            'ivory.google_map.helper.renderer.loader' => 'getIvory_GoogleMap_Helper_Renderer_LoaderService',
            'ivory.google_map.helper.renderer.map' => 'getIvory_GoogleMap_Helper_Renderer_MapService',
            'ivory.google_map.helper.renderer.map_bound' => 'getIvory_GoogleMap_Helper_Renderer_MapBoundService',
            'ivory.google_map.helper.renderer.map_center' => 'getIvory_GoogleMap_Helper_Renderer_MapCenterService',
            'ivory.google_map.helper.renderer.map_container' => 'getIvory_GoogleMap_Helper_Renderer_MapContainerService',
            'ivory.google_map.helper.renderer.map_html' => 'getIvory_GoogleMap_Helper_Renderer_MapHtmlService',
            'ivory.google_map.helper.renderer.map_type_id' => 'getIvory_GoogleMap_Helper_Renderer_MapTypeIdService',
            'ivory.google_map.helper.renderer.overlay.animation' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_AnimationService',
            'ivory.google_map.helper.renderer.overlay.circle' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_CircleService',
            'ivory.google_map.helper.renderer.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.renderer.overlay.extendable' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_ExtendableService',
            'ivory.google_map.helper.renderer.overlay.extendable.bounds' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_BoundsService',
            'ivory.google_map.helper.renderer.overlay.extendable.default_viewport' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_DefaultViewportService',
            'ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_HeatmapLayerService',
            'ivory.google_map.helper.renderer.overlay.extendable.path' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PathService',
            'ivory.google_map.helper.renderer.overlay.extendable.position' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PositionService',
            'ivory.google_map.helper.renderer.overlay.ground_overlay' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_GroundOverlayService',
            'ivory.google_map.helper.renderer.overlay.icon' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_IconService',
            'ivory.google_map.helper.renderer.overlay.icon_sequence' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_IconSequenceService',
            'ivory.google_map.helper.renderer.overlay.info_box' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoBoxService',
            'ivory.google_map.helper.renderer.overlay.info_window.close' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_CloseService',
            'ivory.google_map.helper.renderer.overlay.info_window.default' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_DefaultService',
            'ivory.google_map.helper.renderer.overlay.info_window.open' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_OpenService',
            'ivory.google_map.helper.renderer.overlay.marker' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerService',
            'ivory.google_map.helper.renderer.overlay.marker_clusterer' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerClustererService',
            'ivory.google_map.helper.renderer.overlay.marker_shape' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerShapeService',
            'ivory.google_map.helper.renderer.overlay.polygon' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_PolygonService',
            'ivory.google_map.helper.renderer.overlay.polyline' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_PolylineService',
            'ivory.google_map.helper.renderer.overlay.rectangle' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_RectangleService',
            'ivory.google_map.helper.renderer.overlay.symbol' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolService',
            'ivory.google_map.helper.renderer.overlay.symbol_path' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolPathService',
            'ivory.google_map.helper.renderer.place.autocomplete' => 'getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteService',
            'ivory.google_map.helper.renderer.place.autocomplete_container' => 'getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteContainerService',
            'ivory.google_map.helper.renderer.place.autocomplete_html' => 'getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteHtmlService',
            'ivory.google_map.helper.renderer.static.base.coordinate' => 'getIvory_GoogleMap_Helper_Renderer_Static_Base_CoordinateService',
            'ivory.google_map.helper.renderer.static.base.point' => 'getIvory_GoogleMap_Helper_Renderer_Static_Base_PointService',
            'ivory.google_map.helper.renderer.static.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_StyleService',
            'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_ValueService',
            'ivory.google_map.helper.renderer.static.overlay.extendable' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_ExtendableService',
            'ivory.google_map.helper.renderer.static.overlay.marker' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_MarkerService',
            'ivory.google_map.helper.renderer.static.overlay.marker.location' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_LocationService',
            'ivory.google_map.helper.renderer.static.overlay.marker.style' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_StyleService',
            'ivory.google_map.helper.renderer.static.overlay.polyline' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_PolylineService',
            'ivory.google_map.helper.renderer.static.overlay.polyline.location' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_LocationService',
            'ivory.google_map.helper.renderer.static.overlay.polyline.style' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_StyleService',
            'ivory.google_map.helper.renderer.static.size' => 'getIvory_GoogleMap_Helper_Renderer_Static_SizeService',
            'ivory.google_map.helper.renderer.utility.callback' => 'getIvory_GoogleMap_Helper_Renderer_Utility_CallbackService',
            'ivory.google_map.helper.renderer.utility.object_to_array' => 'getIvory_GoogleMap_Helper_Renderer_Utility_ObjectToArrayService',
            'ivory.google_map.helper.renderer.utility.requirement' => 'getIvory_GoogleMap_Helper_Renderer_Utility_RequirementService',
            'ivory.google_map.helper.renderer.utility.requirement_loader' => 'getIvory_GoogleMap_Helper_Renderer_Utility_RequirementLoaderService',
            'ivory.google_map.helper.renderer.utility.source' => 'getIvory_GoogleMap_Helper_Renderer_Utility_SourceService',
            'ivory.google_map.helper.subscriber.api_javascript' => 'getIvory_GoogleMap_Helper_Subscriber_ApiJavascriptService',
            'ivory.google_map.helper.subscriber.base' => 'getIvory_GoogleMap_Helper_Subscriber_BaseService',
            'ivory.google_map.helper.subscriber.base.bound' => 'getIvory_GoogleMap_Helper_Subscriber_Base_BoundService',
            'ivory.google_map.helper.subscriber.base.coordinate' => 'getIvory_GoogleMap_Helper_Subscriber_Base_CoordinateService',
            'ivory.google_map.helper.subscriber.base.point' => 'getIvory_GoogleMap_Helper_Subscriber_Base_PointService',
            'ivory.google_map.helper.subscriber.base.size' => 'getIvory_GoogleMap_Helper_Subscriber_Base_SizeService',
            'ivory.google_map.helper.subscriber.control' => 'getIvory_GoogleMap_Helper_Subscriber_ControlService',
            'ivory.google_map.helper.subscriber.control.custom' => 'getIvory_GoogleMap_Helper_Subscriber_Control_CustomService',
            'ivory.google_map.helper.subscriber.event' => 'getIvory_GoogleMap_Helper_Subscriber_EventService',
            'ivory.google_map.helper.subscriber.event.dom_event' => 'getIvory_GoogleMap_Helper_Subscriber_Event_DomEventService',
            'ivory.google_map.helper.subscriber.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Event_DomEventOnceService',
            'ivory.google_map.helper.subscriber.event.event' => 'getIvory_GoogleMap_Helper_Subscriber_Event_EventService',
            'ivory.google_map.helper.subscriber.event.event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Event_EventOnceService',
            'ivory.google_map.helper.subscriber.layer' => 'getIvory_GoogleMap_Helper_Subscriber_LayerService',
            'ivory.google_map.helper.subscriber.layer.geo_json' => 'getIvory_GoogleMap_Helper_Subscriber_Layer_GeoJsonService',
            'ivory.google_map.helper.subscriber.layer.heatmap' => 'getIvory_GoogleMap_Helper_Subscriber_Layer_HeatmapService',
            'ivory.google_map.helper.subscriber.layer.kml' => 'getIvory_GoogleMap_Helper_Subscriber_Layer_KmlService',
            'ivory.google_map.helper.subscriber.map' => 'getIvory_GoogleMap_Helper_Subscriber_MapService',
            'ivory.google_map.helper.subscriber.map_bound' => 'getIvory_GoogleMap_Helper_Subscriber_MapBoundService',
            'ivory.google_map.helper.subscriber.map_center' => 'getIvory_GoogleMap_Helper_Subscriber_MapCenterService',
            'ivory.google_map.helper.subscriber.map_container' => 'getIvory_GoogleMap_Helper_Subscriber_MapContainerService',
            'ivory.google_map.helper.subscriber.map_html' => 'getIvory_GoogleMap_Helper_Subscriber_MapHtmlService',
            'ivory.google_map.helper.subscriber.map_init' => 'getIvory_GoogleMap_Helper_Subscriber_MapInitService',
            'ivory.google_map.helper.subscriber.map_javascript' => 'getIvory_GoogleMap_Helper_Subscriber_MapJavascriptService',
            'ivory.google_map.helper.subscriber.map_stylehseet' => 'getIvory_GoogleMap_Helper_Subscriber_MapStylehseetService',
            'ivory.google_map.helper.subscriber.overlay' => 'getIvory_GoogleMap_Helper_Subscriber_OverlayService',
            'ivory.google_map.helper.subscriber.overlay.circle' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_CircleService',
            'ivory.google_map.helper.subscriber.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.subscriber.overlay.extendable' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_ExtendableService',
            'ivory.google_map.helper.subscriber.overlay.ground_overlay' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_GroundOverlayService',
            'ivory.google_map.helper.subscriber.overlay.icon' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_IconService',
            'ivory.google_map.helper.subscriber.overlay.icon_sequence' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_IconSequenceService',
            'ivory.google_map.helper.subscriber.overlay.info_box' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoBoxService',
            'ivory.google_map.helper.subscriber.overlay.info_window.close' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_CloseService',
            'ivory.google_map.helper.subscriber.overlay.info_window.default' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_DefaultService',
            'ivory.google_map.helper.subscriber.overlay.info_window.open' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_OpenService',
            'ivory.google_map.helper.subscriber.overlay.marker' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerService',
            'ivory.google_map.helper.subscriber.overlay.marker.info_window.open' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_Marker_InfoWindow_OpenService',
            'ivory.google_map.helper.subscriber.overlay.marker_clusterer' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerClustererService',
            'ivory.google_map.helper.subscriber.overlay.marker_shape' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerShapeService',
            'ivory.google_map.helper.subscriber.overlay.polygon' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_PolygonService',
            'ivory.google_map.helper.subscriber.overlay.polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_PolylineService',
            'ivory.google_map.helper.subscriber.overlay.rectangle' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_RectangleService',
            'ivory.google_map.helper.subscriber.overlay.symbol' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_SymbolService',
            'ivory.google_map.helper.subscriber.place.autocomplete' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteService',
            'ivory.google_map.helper.subscriber.place.autocomplete.base' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_BaseService',
            'ivory.google_map.helper.subscriber.place.autocomplete.base.bound' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_BoundService',
            'ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_CoordinateService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_EventService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventOnceService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.event' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventOnceService',
            'ivory.google_map.helper.subscriber.place.autocomplete_container' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteContainerService',
            'ivory.google_map.helper.subscriber.place.autocomplete_html' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteHtmlService',
            'ivory.google_map.helper.subscriber.place.autocomplete_init' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteInitService',
            'ivory.google_map.helper.subscriber.place.autocomplete_javascript' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteJavascriptService',
            'ivory.google_map.helper.subscriber.static' => 'getIvory_GoogleMap_Helper_Subscriber_StaticService',
            'ivory.google_map.helper.subscriber.static.center' => 'getIvory_GoogleMap_Helper_Subscriber_Static_CenterService',
            'ivory.google_map.helper.subscriber.static.encoded_polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Static_EncodedPolylineService',
            'ivory.google_map.helper.subscriber.static.extendable' => 'getIvory_GoogleMap_Helper_Subscriber_Static_ExtendableService',
            'ivory.google_map.helper.subscriber.static.format' => 'getIvory_GoogleMap_Helper_Subscriber_Static_FormatService',
            'ivory.google_map.helper.subscriber.static.key' => 'getIvory_GoogleMap_Helper_Subscriber_Static_KeyService',
            'ivory.google_map.helper.subscriber.static.marker' => 'getIvory_GoogleMap_Helper_Subscriber_Static_MarkerService',
            'ivory.google_map.helper.subscriber.static.polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Static_PolylineService',
            'ivory.google_map.helper.subscriber.static.scale' => 'getIvory_GoogleMap_Helper_Subscriber_Static_ScaleService',
            'ivory.google_map.helper.subscriber.static.size' => 'getIvory_GoogleMap_Helper_Subscriber_Static_SizeService',
            'ivory.google_map.helper.subscriber.static.type' => 'getIvory_GoogleMap_Helper_Subscriber_Static_TypeService',
            'ivory.google_map.helper.subscriber.static.zoom' => 'getIvory_GoogleMap_Helper_Subscriber_Static_ZoomService',
            'ivory.google_map.helper.subscriber.utility.object_to_array' => 'getIvory_GoogleMap_Helper_Subscriber_Utility_ObjectToArrayService',
            'ivory.google_map.twig.extension.api' => 'getIvory_GoogleMap_Twig_Extension_ApiService',
            'ivory.google_map.twig.extension.map' => 'getIvory_GoogleMap_Twig_Extension_MapService',
            'ivory.google_map.twig.extension.map.static' => 'getIvory_GoogleMap_Twig_Extension_Map_StaticService',
            'ivory.google_map.twig.extension.place_autocomplete' => 'getIvory_GoogleMap_Twig_Extension_PlaceAutocompleteService',
            'ivory.serializer' => 'getIvory_SerializerService',
            'ivory.serializer.accessor' => 'getIvory_Serializer_AccessorService',
            'ivory.serializer.event.dispatcher' => 'getIvory_Serializer_Event_DispatcherService',
            'ivory.serializer.instantiator' => 'getIvory_Serializer_InstantiatorService',
            'ivory.serializer.mapping.factory.default' => 'getIvory_Serializer_Mapping_Factory_DefaultService',
            'ivory.serializer.mapping.factory.event' => 'getIvory_Serializer_Mapping_Factory_EventService',
            'ivory.serializer.mapping.loader' => 'getIvory_Serializer_Mapping_LoaderService',
            'ivory.serializer.mapping.loader.annotation' => 'getIvory_Serializer_Mapping_Loader_AnnotationService',
            'ivory.serializer.mapping.loader.reflection' => 'getIvory_Serializer_Mapping_Loader_ReflectionService',
            'ivory.serializer.mutator' => 'getIvory_Serializer_MutatorService',
            'ivory.serializer.navigator.default' => 'getIvory_Serializer_Navigator_DefaultService',
            'ivory.serializer.navigator.event' => 'getIvory_Serializer_Navigator_EventService',
            'ivory.serializer.registry.type' => 'getIvory_Serializer_Registry_TypeService',
            'ivory.serializer.registry.visitor' => 'getIvory_Serializer_Registry_VisitorService',
            'ivory.serializer.type.array' => 'getIvory_Serializer_Type_ArrayService',
            'ivory.serializer.type.boolean' => 'getIvory_Serializer_Type_BooleanService',
            'ivory.serializer.type.closure' => 'getIvory_Serializer_Type_ClosureService',
            'ivory.serializer.type.date_time' => 'getIvory_Serializer_Type_DateTimeService',
            'ivory.serializer.type.exception' => 'getIvory_Serializer_Type_ExceptionService',
            'ivory.serializer.type.float' => 'getIvory_Serializer_Type_FloatService',
            'ivory.serializer.type.form' => 'getIvory_Serializer_Type_FormService',
            'ivory.serializer.type.form_error' => 'getIvory_Serializer_Type_FormErrorService',
            'ivory.serializer.type.guesser' => 'getIvory_Serializer_Type_GuesserService',
            'ivory.serializer.type.integer' => 'getIvory_Serializer_Type_IntegerService',
            'ivory.serializer.type.lexer' => 'getIvory_Serializer_Type_LexerService',
            'ivory.serializer.type.null' => 'getIvory_Serializer_Type_NullService',
            'ivory.serializer.type.object' => 'getIvory_Serializer_Type_ObjectService',
            'ivory.serializer.type.parser' => 'getIvory_Serializer_Type_ParserService',
            'ivory.serializer.type.resource' => 'getIvory_Serializer_Type_ResourceService',
            'ivory.serializer.type.std_class' => 'getIvory_Serializer_Type_StdClassService',
            'ivory.serializer.type.string' => 'getIvory_Serializer_Type_StringService',
            'ivory.serializer.visitor.csv.deserialization' => 'getIvory_Serializer_Visitor_Csv_DeserializationService',
            'ivory.serializer.visitor.csv.serialization' => 'getIvory_Serializer_Visitor_Csv_SerializationService',
            'ivory.serializer.visitor.json.deserialization' => 'getIvory_Serializer_Visitor_Json_DeserializationService',
            'ivory.serializer.visitor.json.serialization' => 'getIvory_Serializer_Visitor_Json_SerializationService',
            'ivory.serializer.visitor.xml.deserialization' => 'getIvory_Serializer_Visitor_Xml_DeserializationService',
            'ivory.serializer.visitor.xml.serialization' => 'getIvory_Serializer_Visitor_Xml_SerializationService',
            'ivory.serializer.visitor.yaml.deserialization' => 'getIvory_Serializer_Visitor_Yaml_DeserializationService',
            'ivory.serializer.visitor.yaml.serialization' => 'getIvory_Serializer_Visitor_Yaml_SerializationService',
            'ivory_ck_editor.command.installer' => 'getIvoryCkEditor_Command_InstallerService',
            'ivory_ck_editor.config_manager' => 'getIvoryCkEditor_ConfigManagerService',
            'ivory_ck_editor.form.type' => 'getIvoryCkEditor_Form_TypeService',
            'ivory_ck_editor.installer' => 'getIvoryCkEditor_InstallerService',
            'ivory_ck_editor.plugin_manager' => 'getIvoryCkEditor_PluginManagerService',
            'ivory_ck_editor.renderer' => 'getIvoryCkEditor_RendererService',
            'ivory_ck_editor.renderer.json_builder' => 'getIvoryCkEditor_Renderer_JsonBuilderService',
            'ivory_ck_editor.styles_set_manager' => 'getIvoryCkEditor_StylesSetManagerService',
            'ivory_ck_editor.template_manager' => 'getIvoryCkEditor_TemplateManagerService',
            'ivory_ck_editor.toolbar_manager' => 'getIvoryCkEditor_ToolbarManagerService',
            'ivory_ck_editor.twig_extension' => 'getIvoryCkEditor_TwigExtensionService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'knp_paginator' => 'getKnpPaginatorService',
            'knp_paginator.helper.processor' => 'getKnpPaginator_Helper_ProcessorService',
            'knp_paginator.subscriber.filtration' => 'getKnpPaginator_Subscriber_FiltrationService',
            'knp_paginator.subscriber.paginate' => 'getKnpPaginator_Subscriber_PaginateService',
            'knp_paginator.subscriber.sliding_pagination' => 'getKnpPaginator_Subscriber_SlidingPaginationService',
            'knp_paginator.subscriber.sortable' => 'getKnpPaginator_Subscriber_SortableService',
            'knp_paginator.twig.extension.pagination' => 'getKnpPaginator_Twig_Extension_PaginationService',
            'liip_imagine' => 'getLiipImagineService',
            'liip_imagine.binary.loader.default' => 'getLiipImagine_Binary_Loader_DefaultService',
            'liip_imagine.binary.loader.prototype.filesystem' => 'getLiipImagine_Binary_Loader_Prototype_FilesystemService',
            'liip_imagine.binary.loader.prototype.stream' => 'getLiipImagine_Binary_Loader_Prototype_StreamService',
            'liip_imagine.binary.mime_type_guesser' => 'getLiipImagine_Binary_MimeTypeGuesserService',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService',
            'liip_imagine.cache.resolver.default' => 'getLiipImagine_Cache_Resolver_DefaultService',
            'liip_imagine.cache.resolver.no_cache_web_path' => 'getLiipImagine_Cache_Resolver_NoCacheWebPathService',
            'liip_imagine.cache.signer' => 'getLiipImagine_Cache_SignerService',
            'liip_imagine.controller' => 'getLiipImagine_ControllerService',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService',
            'liip_imagine.extension_guesser' => 'getLiipImagine_ExtensionGuesserService',
            'liip_imagine.filter.configuration' => 'getLiipImagine_Filter_ConfigurationService',
            'liip_imagine.filter.loader.auto_rotate' => 'getLiipImagine_Filter_Loader_AutoRotateService',
            'liip_imagine.filter.loader.background' => 'getLiipImagine_Filter_Loader_BackgroundService',
            'liip_imagine.filter.loader.crop' => 'getLiipImagine_Filter_Loader_CropService',
            'liip_imagine.filter.loader.downscale' => 'getLiipImagine_Filter_Loader_DownscaleService',
            'liip_imagine.filter.loader.grayscale' => 'getLiipImagine_Filter_Loader_GrayscaleService',
            'liip_imagine.filter.loader.interlace' => 'getLiipImagine_Filter_Loader_InterlaceService',
            'liip_imagine.filter.loader.paste' => 'getLiipImagine_Filter_Loader_PasteService',
            'liip_imagine.filter.loader.relative_resize' => 'getLiipImagine_Filter_Loader_RelativeResizeService',
            'liip_imagine.filter.loader.resize' => 'getLiipImagine_Filter_Loader_ResizeService',
            'liip_imagine.filter.loader.rotate' => 'getLiipImagine_Filter_Loader_RotateService',
            'liip_imagine.filter.loader.scale' => 'getLiipImagine_Filter_Loader_ScaleService',
            'liip_imagine.filter.loader.strip' => 'getLiipImagine_Filter_Loader_StripService',
            'liip_imagine.filter.loader.thumbnail' => 'getLiipImagine_Filter_Loader_ThumbnailService',
            'liip_imagine.filter.loader.upscale' => 'getLiipImagine_Filter_Loader_UpscaleService',
            'liip_imagine.filter.loader.watermark' => 'getLiipImagine_Filter_Loader_WatermarkService',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService',
            'liip_imagine.filter.post_processor.jpegoptim' => 'getLiipImagine_Filter_PostProcessor_JpegoptimService',
            'liip_imagine.filter.post_processor.mozjpeg' => 'getLiipImagine_Filter_PostProcessor_MozjpegService',
            'liip_imagine.filter.post_processor.optipng' => 'getLiipImagine_Filter_PostProcessor_OptipngService',
            'liip_imagine.filter.post_processor.pngquant' => 'getLiipImagine_Filter_PostProcessor_PngquantService',
            'liip_imagine.form.type.image' => 'getLiipImagine_Form_Type_ImageService',
            'liip_imagine.mime_type_guesser' => 'getLiipImagine_MimeTypeGuesserService',
            'liip_imagine.templating.helper' => 'getLiipImagine_Templating_HelperService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'positibe_unique_views.twig_extension' => 'getPositibeUniqueViews_TwigExtensionService',
            'positibe_unique_views.views_counter' => 'getPositibeUniqueViews_ViewsCounterService',
            'positibe_unique_views.visitable_manager' => 'getPositibeUniqueViews_VisitableManagerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.csrf.token_storage' => 'getSecurity_Csrf_TokenStorageService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker.main' => 'getSecurity_UserChecker_MainService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.fm_elfinder_init' => 'getTwig_Extension_FmElfinderInitService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
        );
        $this->aliases = array(
            'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
            'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
            'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
            'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearmetadatacachedoctrinecommand' => 'doctrine.cache_clear_metadata_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearquerycachedoctrinecommand' => 'doctrine.cache_clear_query_cache_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearresultcachedoctrinecommand' => 'doctrine.cache_clear_result_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_collectionregiondoctrinecommand' => 'doctrine.cache_collection_region_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_convertmappingdoctrinecommand' => 'doctrine.mapping_convert_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_createschemadoctrinecommand' => 'doctrine.schema_create_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_dropschemadoctrinecommand' => 'doctrine.schema_drop_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_ensureproductionsettingsdoctrinecommand' => 'doctrine.ensure_production_settings_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_entityregioncachedoctrinecommand' => 'doctrine.clear_entity_region_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_importdoctrinecommand' => 'doctrine.database_import_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_infodoctrinecommand' => 'doctrine.mapping_info_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_queryregioncachedoctrinecommand' => 'doctrine.clear_query_region_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_rundqldoctrinecommand' => 'doctrine.query_dql_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'doctrine_cache.contains_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'doctrine_cache.delete_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'doctrine_cache.flush_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'doctrine_cache.stats_command',
            'console.command.fos_userbundle_command_activateusercommand' => 'fos_user.command.activate_user',
            'console.command.fos_userbundle_command_changepasswordcommand' => 'fos_user.command.change_password',
            'console.command.fos_userbundle_command_createusercommand' => 'fos_user.command.create_user',
            'console.command.fos_userbundle_command_deactivateusercommand' => 'fos_user.command.deactivate_user',
            'console.command.fos_userbundle_command_demoteusercommand' => 'fos_user.command.demote_user',
            'console.command.fos_userbundle_command_promoteusercommand' => 'fos_user.command.promote_user',
            'console.command.ivory_ckeditorbundle_command_ckeditorinstallercommand' => 'ivory_ck_editor.command.installer',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fm_elfinder.configurator' => 'fm_elfinder.configurator.default',
            'fm_elfinder.loader' => 'fm_elfinder.loader.default',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'httplug.client' => 'httplug.client.default',
            'httplug.message_factory' => 'httplug.message_factory.default',
            'httplug.stream_factory' => 'httplug.stream_factory.default',
            'httplug.uri_factory' => 'httplug.uri_factory.default',
            'ivory.serializer.mapping.factory' => 'ivory.serializer.mapping.factory.default',
            'ivory.serializer.navigator' => 'ivory.serializer.navigator.event',
            'knp\\component\\pager\\paginatorinterface' => 'knp_paginator',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /**
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(new \Doctrine\Common\Annotations\AnnotationReader(), new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/annotations')), true);
    }

    /**
     * Gets the public 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /**
     * Gets the public 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => $this->get('kernel.class_cache.cache_warmer'), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 4 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form') => NULL)), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this, new \Symfony\Bundle\TwigBundle\TemplateIterator($a, $this->targetDirs[2], array(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form') => NULL))), 6 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }

    /**
     * Gets the public 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array(0 => new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker(), 1 => new \Symfony\Component\Config\Resource\BCResourceInterfaceChecker()));
    }

    /**
     * Gets the public 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the public 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), -4182, NULL, true, NULL);
    }

    /**
     * Gets the public 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('kernel.request', array(0 => 'knp_paginator.subscriber.sliding_pagination', 1 => 'onKernelRequest'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('fos_user.security.interactive_login_listener', 'FOS\\UserBundle\\EventListener\\LastLoginListener');
        $instance->addSubscriberService('fos_user.listener.authentication', 'FOS\\UserBundle\\EventListener\\AuthenticationListener');
        $instance->addSubscriberService('fos_user.listener.flash', 'FOS\\UserBundle\\EventListener\\FlashListener');
        $instance->addSubscriberService('fos_user.listener.resetting', 'FOS\\UserBundle\\EventListener\\ResettingListener');
        $instance->addSubscriberService('httplug.strategy', 'Http\\HttplugBundle\\Discovery\\ConfiguredClientsStrategy');
        $instance->addSubscriberService('http\\httplugbundle\\collector\\pluginclientfactorylistener', 'Http\\HttplugBundle\\Collector\\PluginClientFactoryListener');
        $instance->addSubscriberService('knp_paginator.subscriber.paginate', 'Knp\\Component\\Pager\\Event\\Subscriber\\Paginate\\PaginationSubscriber');
        $instance->addSubscriberService('knp_paginator.subscriber.sortable', 'Knp\\Component\\Pager\\Event\\Subscriber\\Sortable\\SortableSubscriber');
        $instance->addSubscriberService('knp_paginator.subscriber.filtration', 'Knp\\Component\\Pager\\Event\\Subscriber\\Filtration\\FiltrationSubscriber');
        $instance->addSubscriberService('knp_paginator.subscriber.sliding_pagination', 'Knp\\Bundle\\PaginatorBundle\\Subscriber\\SlidingPaginationSubscriber');

        return $instance;
    }

    /**
     * Gets the public 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        return $this->services['doctrine.cache_clear_metadata_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        return $this->services['doctrine.cache_clear_query_cache_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        return $this->services['doctrine.cache_clear_result_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        return $this->services['doctrine.cache_collection_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        return $this->services['doctrine.clear_entity_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        return $this->services['doctrine.clear_query_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        return $this->services['doctrine.database_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        return $this->services['doctrine.database_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        return $this->services['doctrine.database_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $a->addLogger(new \Doctrine\DBAL\Logging\DebugStack());

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Gedmo\Sluggable\SluggableListener();
        $c->setAnnotationReader($this->get('annotation_reader'));

        $d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $d->addEventSubscriber(new \FOS\UserBundle\Doctrine\UserListener($this->get('fos_user.util.password_updater'), $this->get('fos_user.util.canonical_fields_updater')));
        $d->addEventSubscriber($c);
        $d->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'creativweb', 'user' => 'root', 'password' => NULL, 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $b, $d, array());
    }

    /**
     * Gets the public 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        return $this->services['doctrine.ensure_production_settings_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.generate_entities_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand
     */
    protected function getDoctrine_GenerateEntitiesCommandService()
    {
        return $this->services['doctrine.generate_entities_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        return $this->services['doctrine.mapping_convert_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        return $this->services['doctrine.mapping_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        return $this->services['doctrine.mapping_info_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array(0 => ($this->targetDirs[3].'\\src\\Cosanit\\CosanitBundle\\Entity'))), 'Cosanit\\CosanitBundle\\Entity');
        $a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Resources\\config\\doctrine-mapping') => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');

        $b = new \Doctrine\ORM\Configuration();
        $b->setEntityNamespaces(array('CosanitBundle' => 'Cosanit\\CosanitBundle\\Entity'));
        $b->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $b->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $b->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $b->setMetadataDriverImpl($a);
        $b->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $b->setProxyNamespace('Proxies');
        $b->setAutoGenerateProxyClasses(true);
        $b->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $b->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $b->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $b->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $b->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));
        $b->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(NULL));

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $b);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor($this->get('doctrine.orm.default_entity_manager')->getMetadataFactory());
    }

    /**
     * Gets the public 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the public 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the public 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the public 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the public 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        return $this->services['doctrine.query_dql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        return $this->services['doctrine.query_sql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        return $this->services['doctrine.schema_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        return $this->services['doctrine.schema_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        return $this->services['doctrine.schema_update_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        return $this->services['doctrine.schema_validate_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();
    }

    /**
     * Gets the public 'doctrine_cache.contains_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand
     */
    protected function getDoctrineCache_ContainsCommandService()
    {
        return $this->services['doctrine_cache.contains_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand();
    }

    /**
     * Gets the public 'doctrine_cache.delete_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand
     */
    protected function getDoctrineCache_DeleteCommandService()
    {
        return $this->services['doctrine_cache.delete_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand();
    }

    /**
     * Gets the public 'doctrine_cache.flush_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand
     */
    protected function getDoctrineCache_FlushCommandService()
    {
        return $this->services['doctrine_cache.flush_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand();
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_248a3fe8eda6f7f786f495234d5e643243c0d85627d3e3d6a9a6f7e1dd744759');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_248a3fe8eda6f7f786f495234d5e643243c0d85627d3e3d6a9a6f7e1dd744759');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_248a3fe8eda6f7f786f495234d5e643243c0d85627d3e3d6a9a6f7e1dd744759');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.stats_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand
     */
    protected function getDoctrineCache_StatsCommandService()
    {
        return $this->services['doctrine_cache.stats_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand();
    }

    /**
     * Gets the public 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'fm_elfinder.configurator.default' shared service.
     *
     * @return \FM\ElfinderBundle\Configuration\ElFinderConfigurationReader
     */
    protected function getFmElfinder_Configurator_DefaultService()
    {
        return $this->services['fm_elfinder.configurator.default'] = new \FM\ElfinderBundle\Configuration\ElFinderConfigurationReader(array('instances' => array('default' => array('relative_path' => false, 'locale' => 'fr', 'editor' => 'ckeditor', 'connector' => array('roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '2M', 'volume_id' => 0, 'autoload' => false, 'phash' => '', 'trash_hash' => '', 'locale' => '', 'i18n_folder_name' => false, 'mime_detect' => 'auto', 'mimefile' => '', 'security_voter' => '', 'start_path' => '', 'encoding' => 'UTF-8', 'url' => '', 'alias' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'fileMode' => 420, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => 1, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array('enabled' => false, 'create' => array(), 'extract' => array()), 'flysystem' => array('enabled' => false, 'filesystem' => '', 'type' => '', 'adapter_service' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'driver_options' => array(), 'dropbox2_settings' => array('enabled' => false, 'aliasFormat' => '%s@Dropbox', 'path' => '/', 'separator' => '/', 'acceptedName' => '%s@Dropbox', 'rootCssClass' => 'elfinder-navbar-root-dropbox', 'getThumbSize' => 'medium'), 'box_settings' => array('enabled' => false, 'root' => 'Box.com', 'path' => '/', 'separator' => '/', 'tmbPath' => '', 'tmbURL' => '', 'tmpPath' => '', 'acceptedName' => '#^[^/\\?*:|"<>]*[^./\\?*:|"<>]$#', 'rootCssClass' => 'elfinder-navbar-root-box'), 'onedrive_settings' => array('enabled' => false, 'root' => 'OneDrive.com', 'OneDriveApiClient' => '', 'path' => '/', 'separator' => '/', 'tmbPath' => '', 'tmbURL' => '', 'tmpPath' => '', 'acceptedName' => '#^[^/\\?*:|"<>]*[^./\\?*:|"<>]$#', 'rootCssClass' => 'elfinder-navbar-root-onedrive', 'useApiThumbnail' => true), 'ftp_settings' => array('enabled' => false), 'mysql_settings' => array('enabled' => false, 'port' => NULL, 'socket' => NULL, 'files_table' => 'elfinder_file', 'tmbPath' => '', 'tmpPath' => '', 'rootCssClass' => 'elfinder-navbar-root-sql', 'noSessionCache' => 'hasdirs'))), 'debug' => false, 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'fullscreen' => true, 'theme' => 'smoothness', 'include_assets' => true, 'tinymce_popup_path' => '', 'path_prefix' => '/', 'visible_mime_types' => array())), 'configuration_provider' => 'fm_elfinder.configurator.default', 'assets_path' => 'assets', 'loader' => 'fm_elfinder.loader.default'), $this->get('request_stack'), $this);
    }

    /**
     * Gets the public 'fm_elfinder.form.type' shared service.
     *
     * @return \FM\ElfinderBundle\Form\Type\ElFinderType
     */
    protected function getFmElfinder_Form_TypeService()
    {
        return $this->services['fm_elfinder.form.type'] = new \FM\ElfinderBundle\Form\Type\ElFinderType();
    }

    /**
     * Gets the public 'fm_elfinder.loader.default' shared service.
     *
     * @return \FM\ElfinderBundle\Loader\ElFinderLoader
     */
    protected function getFmElfinder_Loader_DefaultService()
    {
        return $this->services['fm_elfinder.loader.default'] = new \FM\ElfinderBundle\Loader\ElFinderLoader($this->get('fm_elfinder.configurator.default'));
    }

    /**
     * Gets the public 'form.csrf_provider' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter
     *
     * @deprecated The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.
     */
    protected function getForm_CsrfProviderService()
    {
        @trigger_error('The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.', E_USER_DEPRECATED);

        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the public 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'birthday' => 'form.type.birthday', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'collection' => 'form.type.collection', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => 'form.type.collection', 'country' => 'form.type.country', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType' => 'form.type.country', 'date' => 'form.type.date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'form.type.date', 'datetime' => 'form.type.datetime', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'form.type.datetime', 'email' => 'form.type.email', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => 'form.type.email', 'file' => 'form.type.file', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => 'form.type.file', 'hidden' => 'form.type.hidden', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType' => 'form.type.hidden', 'integer' => 'form.type.integer', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => 'form.type.integer', 'language' => 'form.type.language', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType' => 'form.type.language', 'locale' => 'form.type.locale', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType' => 'form.type.locale', 'money' => 'form.type.money', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType' => 'form.type.money', 'number' => 'form.type.number', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType' => 'form.type.number', 'password' => 'form.type.password', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => 'form.type.password', 'percent' => 'form.type.percent', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType' => 'form.type.percent', 'radio' => 'form.type.radio', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType' => 'form.type.radio', 'range' => 'form.type.range', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RangeType' => 'form.type.range', 'repeated' => 'form.type.repeated', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => 'form.type.repeated', 'search' => 'form.type.search', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType' => 'form.type.search', 'textarea' => 'form.type.textarea', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => 'form.type.textarea', 'text' => 'form.type.text', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => 'form.type.text', 'time' => 'form.type.time', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType' => 'form.type.time', 'timezone' => 'form.type.timezone', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType' => 'form.type.timezone', 'url' => 'form.type.url', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType' => 'form.type.url', 'button' => 'form.type.button', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType' => 'form.type.button', 'submit' => 'form.type.submit', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => 'form.type.submit', 'reset' => 'form.type.reset', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType' => 'form.type.reset', 'currency' => 'form.type.currency', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType' => 'form.type.currency', 'entity' => 'form.type.entity', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'fos_user_username' => 'fos_user.username_form_type', 'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => 'fos_user.profile.form.type', 'fos_user_registration' => 'fos_user.registration.form.type', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => 'fos_user.resetting.form.type', 'ivory_ck_editor.form.type' => 'ivory_ck_editor.form.type', 'Ivory\\CKEditorBundle\\Form\\Type\\CKEditorType' => 'ivory_ck_editor.form.type', 'elfinder' => 'fm_elfinder.form.type', 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType' => 'fm_elfinder.form.type', 'liip_imagine_image' => 'liip_imagine.form.type.image', 'Liip\\ImagineBundle\\Form\\Type\\ImageType' => 'liip_imagine.form.type.image', 'ivory.google_map.form.type.place_autocomplete' => 'ivory.google_map.form.type.place_autocomplete', 'Ivory\\GoogleMapBundle\\Form\\Type\\PlaceAutocompleteType' => 'ivory.google_map.form.type.place_autocomplete'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.upload.validator', 3 => 'form.type_extension.csrf'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the public 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\ResolvedFormTypeFactory
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /**
     * Gets the public 'form.type.birthday' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the public 'form.type.button' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the public 'form.type.checkbox' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the public 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /**
     * Gets the public 'form.type.collection' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the public 'form.type.country' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the public 'form.type.currency' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the public 'form.type.date' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the public 'form.type.datetime' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the public 'form.type.email' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the public 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the public 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the public 'form.type.hidden' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the public 'form.type.integer' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the public 'form.type.language' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the public 'form.type.locale' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the public 'form.type.money' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the public 'form.type.number' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the public 'form.type.password' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the public 'form.type.percent' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the public 'form.type.radio' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the public 'form.type.range' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType
     */
    protected function getForm_Type_RangeService()
    {
        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the public 'form.type.repeated' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the public 'form.type.reset' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the public 'form.type.search' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the public 'form.type.submit' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the public 'form.type.text' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the public 'form.type.textarea' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the public 'form.type.time' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the public 'form.type.timezone' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the public 'form.type.url' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the public 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators', $this->get('form.server_params'));
    }

    /**
     * Gets the public 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler($this->get('form.server_params')));
    }

    /**
     * Gets the public 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the public 'form.type_extension.repeated.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the public 'form.type_extension.submit.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the public 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator'), 'validators');
    }

    /**
     * Gets the public 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the public 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the public 'fos_user.change_password.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ChangePasswordController
     */
    protected function getFosUser_ChangePassword_ControllerService()
    {
        $this->services['fos_user.change_password.controller'] = $instance = new \FOS\UserBundle\Controller\ChangePasswordController($this->get('debug.event_dispatcher'), $this->get('fos_user.change_password.form.factory'), $this->get('fos_user.user_manager'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.change_password.form.factory' shared service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory
     */
    protected function getFosUser_ChangePassword_Form_FactoryService()
    {
        return $this->services['fos_user.change_password.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_change_password_form', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', array(0 => 'ChangePassword', 1 => 'Default'));
    }

    /**
     * Gets the public 'fos_user.change_password.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('Cosanit\\CosanitBundle\\Entity\\User');
    }

    /**
     * Gets the public 'fos_user.command.activate_user' shared service.
     *
     * @return \FOS\UserBundle\Command\ActivateUserCommand
     */
    protected function getFosUser_Command_ActivateUserService()
    {
        return $this->services['fos_user.command.activate_user'] = new \FOS\UserBundle\Command\ActivateUserCommand($this->get('fos_user.util.user_manipulator'));
    }

    /**
     * Gets the public 'fos_user.command.change_password' shared service.
     *
     * @return \FOS\UserBundle\Command\ChangePasswordCommand
     */
    protected function getFosUser_Command_ChangePasswordService()
    {
        return $this->services['fos_user.command.change_password'] = new \FOS\UserBundle\Command\ChangePasswordCommand($this->get('fos_user.util.user_manipulator'));
    }

    /**
     * Gets the public 'fos_user.command.create_user' shared service.
     *
     * @return \FOS\UserBundle\Command\CreateUserCommand
     */
    protected function getFosUser_Command_CreateUserService()
    {
        return $this->services['fos_user.command.create_user'] = new \FOS\UserBundle\Command\CreateUserCommand($this->get('fos_user.util.user_manipulator'));
    }

    /**
     * Gets the public 'fos_user.command.deactivate_user' shared service.
     *
     * @return \FOS\UserBundle\Command\DeactivateUserCommand
     */
    protected function getFosUser_Command_DeactivateUserService()
    {
        return $this->services['fos_user.command.deactivate_user'] = new \FOS\UserBundle\Command\DeactivateUserCommand($this->get('fos_user.util.user_manipulator'));
    }

    /**
     * Gets the public 'fos_user.command.demote_user' shared service.
     *
     * @return \FOS\UserBundle\Command\DemoteUserCommand
     */
    protected function getFosUser_Command_DemoteUserService()
    {
        return $this->services['fos_user.command.demote_user'] = new \FOS\UserBundle\Command\DemoteUserCommand($this->get('fos_user.util.user_manipulator'));
    }

    /**
     * Gets the public 'fos_user.command.promote_user' shared service.
     *
     * @return \FOS\UserBundle\Command\PromoteUserCommand
     */
    protected function getFosUser_Command_PromoteUserService()
    {
        return $this->services['fos_user.command.promote_user'] = new \FOS\UserBundle\Command\PromoteUserCommand($this->get('fos_user.util.user_manipulator'));
    }

    /**
     * Gets the public 'fos_user.listener.authentication' shared service.
     *
     * @return \FOS\UserBundle\EventListener\AuthenticationListener
     */
    protected function getFosUser_Listener_AuthenticationService()
    {
        return $this->services['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener($this->get('fos_user.security.login_manager'), 'main');
    }

    /**
     * Gets the public 'fos_user.listener.flash' shared service.
     *
     * @return \FOS\UserBundle\EventListener\FlashListener
     */
    protected function getFosUser_Listener_FlashService()
    {
        return $this->services['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener($this->get('session'), $this->get('translator'));
    }

    /**
     * Gets the public 'fos_user.listener.resetting' shared service.
     *
     * @return \FOS\UserBundle\EventListener\ResettingListener
     */
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->services['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener($this->get('router'), 86400);
    }

    /**
     * Gets the public 'fos_user.mailer' shared service.
     *
     * @return \FOS\UserBundle\Mailer\Mailer
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => '@FOSUser/Registration/email.txt.twig', 'resetting.template' => '@FOSUser/Resetting/email.txt.twig', 'from_email' => array('confirmation' => array('contact@sadjiaceram.com' => 'SADJIACERAM.com'), 'resetting' => array('contact@sadjiaceram.com' => 'SADJIACERAM.com'))));
    }

    /**
     * Gets the public 'fos_user.profile.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ProfileController
     */
    protected function getFosUser_Profile_ControllerService()
    {
        $this->services['fos_user.profile.controller'] = $instance = new \FOS\UserBundle\Controller\ProfileController($this->get('debug.event_dispatcher'), $this->get('fos_user.profile.form.factory'), $this->get('fos_user.user_manager'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.profile.form.factory' shared service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory
     */
    protected function getFosUser_Profile_Form_FactoryService()
    {
        return $this->services['fos_user.profile.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_profile_form', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', array(0 => 'Profile', 1 => 'Default'));
    }

    /**
     * Gets the public 'fos_user.profile.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('Cosanit\\CosanitBundle\\Entity\\User');
    }

    /**
     * Gets the public 'fos_user.registration.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\RegistrationController
     */
    protected function getFosUser_Registration_ControllerService()
    {
        $this->services['fos_user.registration.controller'] = $instance = new \FOS\UserBundle\Controller\RegistrationController($this->get('debug.event_dispatcher'), $this->get('fos_user.registration.form.factory'), $this->get('fos_user.user_manager'), $this->get('security.token_storage'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.registration.form.factory' shared service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory
     */
    protected function getFosUser_Registration_Form_FactoryService()
    {
        return $this->services['fos_user.registration.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_registration_form', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', array(0 => 'Registration', 1 => 'Default'));
    }

    /**
     * Gets the public 'fos_user.registration.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\RegistrationFormType
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('Cosanit\\CosanitBundle\\Entity\\User');
    }

    /**
     * Gets the public 'fos_user.resetting.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ResettingController
     */
    protected function getFosUser_Resetting_ControllerService()
    {
        $this->services['fos_user.resetting.controller'] = $instance = new \FOS\UserBundle\Controller\ResettingController($this->get('debug.event_dispatcher'), $this->get('fos_user.resetting.form.factory'), $this->get('fos_user.user_manager'), $this->get('fos_user.util.token_generator'), $this->get('fos_user.mailer'), 7200);

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.resetting.form.factory' shared service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory
     */
    protected function getFosUser_Resetting_Form_FactoryService()
    {
        return $this->services['fos_user.resetting.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_resetting_form', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', array(0 => 'ResetPassword', 1 => 'Default'));
    }

    /**
     * Gets the public 'fos_user.resetting.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ResettingFormType
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('Cosanit\\CosanitBundle\\Entity\\User');
    }

    /**
     * Gets the public 'fos_user.security.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\SecurityController
     */
    protected function getFosUser_Security_ControllerService()
    {
        $this->services['fos_user.security.controller'] = $instance = new \FOS\UserBundle\Controller\SecurityController($this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.security.interactive_login_listener' shared service.
     *
     * @return \FOS\UserBundle\EventListener\LastLoginListener
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the public 'fos_user.security.login_manager' shared service.
     *
     * @return \FOS\UserBundle\Security\LoginManager
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.token_storage'), $this->get('security.user_checker.main'), $this->get('security.authentication.session_strategy'), $this->get('request_stack'), NULL);
    }

    /**
     * Gets the public 'fos_user.user_manager' shared service.
     *
     * @return \FOS\UserBundle\Doctrine\UserManager
     */
    protected function getFosUser_UserManagerService()
    {
        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager($this->get('fos_user.util.password_updater'), $this->get('fos_user.util.canonical_fields_updater'), $this->get('doctrine')->getManager(NULL), 'Cosanit\\CosanitBundle\\Entity\\User');
    }

    /**
     * Gets the public 'fos_user.username_form_type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }

    /**
     * Gets the public 'fos_user.util.email_canonicalizer' shared service.
     *
     * @return \FOS\UserBundle\Util\Canonicalizer
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the public 'fos_user.util.token_generator' shared service.
     *
     * @return \FOS\UserBundle\Util\TokenGenerator
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator();
    }

    /**
     * Gets the public 'fos_user.util.user_manipulator' shared service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'), $this->get('debug.event_dispatcher'), $this->get('request_stack'));
    }

    /**
     * Gets the public 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), true);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');

        return $instance;
    }

    /**
     * Gets the public 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the public 'fragment.renderer.hinclude' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'http\httplugbundle\collector\pluginclientfactorylistener' shared service.
     *
     * @return \Http\HttplugBundle\Collector\PluginClientFactoryListener
     */
    protected function getHttp_Httplugbundle_Collector_PluginclientfactorylistenerService()
    {
        return $this->services['http\httplugbundle\collector\pluginclientfactorylistener'] = new \Http\HttplugBundle\Collector\PluginClientFactoryListener(new \Http\HttplugBundle\Collector\PluginClientFactory($this->get('httplug.collector.collector'), $this->get('httplug.collector.formatter'), $this->get('debug.stopwatch')));
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'), $this->get('request_stack'), false);
    }

    /**
     * Gets the public 'httplug.async_client.default' shared service.
     *
     * @return \Http\Client\HttpAsyncClient
     */
    protected function getHttplug_AsyncClient_DefaultService()
    {
        return $this->services['httplug.async_client.default'] = \Http\Discovery\HttpAsyncClientDiscovery::find();
    }

    /**
     * Gets the public 'httplug.auto_discovery.auto_discovered_client' shared service.
     *
     * @return \Http\HttplugBundle\Collector\ProfileClient
     */
    protected function getHttplug_AutoDiscovery_AutoDiscoveredClientService()
    {
        return $this->services['httplug.auto_discovery.auto_discovered_client'] = new \Http\HttplugBundle\Collector\ProfileClient(\Http\Discovery\HttpClientDiscovery::find(), $this->get('httplug.collector.collector'), $this->get('httplug.collector.formatter'), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the public 'httplug.client.default' shared service.
     *
     * @return \Http\Client\HttpClient
     */
    protected function getHttplug_Client_DefaultService()
    {
        return $this->services['httplug.client.default'] = \Http\Discovery\HttpClientDiscovery::find();
    }

    /**
     * Gets the public 'httplug.message_factory.default' shared service.
     *
     * @return \Http\Message\MessageFactory
     */
    protected function getHttplug_MessageFactory_DefaultService()
    {
        return $this->services['httplug.message_factory.default'] = \Http\Discovery\MessageFactoryDiscovery::find();
    }

    /**
     * Gets the public 'httplug.strategy' shared service.
     *
     * @return \Http\HttplugBundle\Discovery\ConfiguredClientsStrategy
     */
    protected function getHttplug_StrategyService()
    {
        return $this->services['httplug.strategy'] = new \Http\HttplugBundle\Discovery\ConfiguredClientsStrategy($this->get('httplug.auto_discovery.auto_discovered_client', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL);
    }

    /**
     * Gets the public 'httplug.stream_factory.default' shared service.
     *
     * @return \Http\Message\StreamFactory
     */
    protected function getHttplug_StreamFactory_DefaultService()
    {
        return $this->services['httplug.stream_factory.default'] = \Http\Discovery\StreamFactoryDiscovery::find();
    }

    /**
     * Gets the public 'httplug.uri_factory.default' shared service.
     *
     * @return \Http\Message\UriFactory
     */
    protected function getHttplug_UriFactory_DefaultService()
    {
        return $this->services['httplug.uri_factory.default'] = \Http\Discovery\UriFactoryDiscovery::find();
    }

    /**
     * Gets the public 'ivory.google_map.form.type.place_autocomplete' shared service.
     *
     * @return \Ivory\GoogleMapBundle\Form\Type\PlaceAutocompleteType
     */
    protected function getIvory_GoogleMap_Form_Type_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.form.type.place_autocomplete'] = new \Ivory\GoogleMapBundle\Form\Type\PlaceAutocompleteType();
    }

    /**
     * Gets the public 'ivory.google_map.helper.api' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\ApiHelper
     */
    protected function getIvory_GoogleMap_Helper_ApiService()
    {
        return $this->services['ivory.google_map.helper.api'] = new \Ivory\GoogleMap\Helper\ApiHelper($this->get('ivory.google_map.helper.api.event_dispatcher'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.api.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getIvory_GoogleMap_Helper_Api_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.api.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('ivory.google_map.helper.subscriber.api_javascript', 'Ivory\\GoogleMap\\Helper\\Subscriber\\ApiJavascriptSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.layer.heatmap', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Layer\\HeatmapLayerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_javascript', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapJavascriptSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.encoded_polyline', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\EncodedPolylineSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.info_box', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\InfoBoxSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.marker_clusterer', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\MarkerClustererSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete_javascript', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteJavascriptSubscriber');

        return $instance;
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.base.bound' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\BoundCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.collector.base.bound'] = new \Ivory\GoogleMap\Helper\Collector\Base\BoundCollector($this->get('ivory.google_map.helper.collector.overlay.ground_overlay'), $this->get('ivory.google_map.helper.collector.overlay.rectangle'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.base.coordinate' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\CoordinateCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.collector.base.coordinate'] = new \Ivory\GoogleMap\Helper\Collector\Base\CoordinateCollector($this->get('ivory.google_map.helper.collector.base.bound'), $this->get('ivory.google_map.helper.collector.overlay.circle'), $this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.collector.overlay.polygon'), $this->get('ivory.google_map.helper.collector.overlay.polyline'), $this->get('ivory.google_map.helper.collector.layer.heatmap'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.base.point' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\PointCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.collector.base.point'] = new \Ivory\GoogleMap\Helper\Collector\Base\PointCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.base.size' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\SizeCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_SizeService()
    {
        return $this->services['ivory.google_map.helper.collector.base.size'] = new \Ivory\GoogleMap\Helper\Collector\Base\SizeCollector($this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.collector.overlay.icon'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.control.custom' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Control\CustomControlCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Control_CustomService()
    {
        return $this->services['ivory.google_map.helper.collector.control.custom'] = new \Ivory\GoogleMap\Helper\Collector\Control\CustomControlCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.event.dom_event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\DomEventCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.collector.event.dom_event'] = new \Ivory\GoogleMap\Helper\Collector\Event\DomEventCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.event.dom_event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\DomEventOnceCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Collector\Event\DomEventOnceCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.event.event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\EventCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.collector.event.event'] = new \Ivory\GoogleMap\Helper\Collector\Event\EventCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.event.event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\EventOnceCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.event.event_once'] = new \Ivory\GoogleMap\Helper\Collector\Event\EventOnceCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.layer.geo_json' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Layer\GeoJsonLayerCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Layer_GeoJsonService()
    {
        return $this->services['ivory.google_map.helper.collector.layer.geo_json'] = new \Ivory\GoogleMap\Helper\Collector\Layer\GeoJsonLayerCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.layer.heatmap' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Layer\HeatmapLayerCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Layer_HeatmapService()
    {
        return $this->services['ivory.google_map.helper.collector.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Collector\Layer\HeatmapLayerCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.layer.kml' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Layer\KmlLayerCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Layer_KmlService()
    {
        return $this->services['ivory.google_map.helper.collector.layer.kml'] = new \Ivory\GoogleMap\Helper\Collector\Layer\KmlLayerCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.circle' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\CircleCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_CircleService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.circle'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\CircleCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.encoded_polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\EncodedPolylineCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\EncodedPolylineCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.extendable' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\ExtendableCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.extendable'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\ExtendableCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.ground_overlay' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\GroundOverlayCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_GroundOverlayService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\GroundOverlayCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.icon' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\IconCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_IconService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.icon'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\IconCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.icon_sequence' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\IconSequenceCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_IconSequenceService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.icon_sequence'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\IconSequenceCollector($this->get('ivory.google_map.helper.collector.overlay.polyline'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.info_box' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\InfoBoxCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_InfoBoxService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\InfoBoxCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.info_window' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\InfoWindowCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindowService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.info_window'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\InfoWindowCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.info_window.default' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\DefaultInfoWindowCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindow_DefaultService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.info_window.default'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\DefaultInfoWindowCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.marker' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.marker'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.marker_shape' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerShapeCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_MarkerShapeService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerShapeCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.polygon' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\PolygonCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_PolygonService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\PolygonCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\PolylineCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\PolylineCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.rectangle' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\RectangleCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_RectangleService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\RectangleCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.overlay.symbol' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\SymbolCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_SymbolService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\SymbolCollector($this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.collector.overlay.icon_sequence'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.place.autocomplete.base.bound' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteBoundCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.base.bound'] = new \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteBoundCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.place.autocomplete.base.coordinate' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteCoordinateCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.base.coordinate'] = new \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteCoordinateCollector($this->get('ivory.google_map.helper.collector.place.autocomplete.base.bound'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.place.autocomplete.event.dom_event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.dom_event'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventOnceCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventOnceCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.place.autocomplete.event.event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.event'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.place.autocomplete.event.event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventOnceCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.event_once'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventOnceCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.static.encoded_polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\EncodedPolylineCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.static.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Collector\Image\EncodedPolylineCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.static.extendable' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\ExtendableCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.collector.static.extendable'] = new \Ivory\GoogleMap\Helper\Collector\Image\ExtendableCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.static.marker' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\MarkerCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_MarkerService()
    {
        return $this->services['ivory.google_map.helper.collector.static.marker'] = new \Ivory\GoogleMap\Helper\Collector\Image\MarkerCollector($this->get('ivory.google_map.helper.renderer.static.overlay.marker.style'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.collector.static.polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\PolylineCollector
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_PolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.static.polyline'] = new \Ivory\GoogleMap\Helper\Collector\Image\PolylineCollector();
    }

    /**
     * Gets the public 'ivory.google_map.helper.formatter' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Formatter\Formatter
     */
    protected function getIvory_GoogleMap_Helper_FormatterService()
    {
        return $this->services['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(true);
    }

    /**
     * Gets the public 'ivory.google_map.helper.json_builder' shared service.
     *
     * @return \Ivory\JsonBuilder\JsonBuilder
     */
    protected function getIvory_GoogleMap_Helper_JsonBuilderService()
    {
        return $this->services['ivory.google_map.helper.json_builder'] = new \Ivory\JsonBuilder\JsonBuilder();
    }

    /**
     * Gets the public 'ivory.google_map.helper.map' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\MapHelper
     */
    protected function getIvory_GoogleMap_Helper_MapService()
    {
        return $this->services['ivory.google_map.helper.map'] = new \Ivory\GoogleMap\Helper\MapHelper($this->get('ivory.google_map.helper.map.event_dispatcher'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.map.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getIvory_GoogleMap_Helper_Map_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.map.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('ivory.google_map.helper.subscriber.base', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Base\\BaseSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.base.bound', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Base\\BoundSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.base.coordinate', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Base\\CoordinateSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.base.point', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Base\\PointSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.base.size', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Base\\SizeSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.control', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Control\\ControlSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.control.custom', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Control\\CustomControlSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Event\\EventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.event.dom_event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Event\\DomEventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.event.dom_event_once', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Event\\DomEventOnceSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.event.event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Event\\SimpleEventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.event.event_once', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Event\\EventOnceSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.layer', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Layer\\LayerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.layer.geo_json', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Layer\\GeoJsonLayerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.layer.heatmap', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Layer\\HeatmapLayerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.layer.kml', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Layer\\KmlLayerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_bound', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapBoundSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_center', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapCenterSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_container', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapContainerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_html', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapHtmlSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_init', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapInitSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_javascript', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapJavascriptSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_stylehseet', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapStylesheetSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\OverlaySubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.circle', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\CircleSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.encoded_polyline', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\EncodedPolylineSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.extendable', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\ExtendableSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.ground_overlay', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\GroundOverlaySubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.icon', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\IconSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.icon_sequence', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\IconSequenceSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.info_box', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\InfoBoxSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.info_window.close', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\InfoWindowCloseSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.info_window.open', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\InfoWindowOpenSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.info_window.default', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\DefaultInfoWindowSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.marker', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\MarkerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.marker_clusterer', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\MarkerClustererSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.marker_shape', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\MarkerShapeSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.marker.info_window.open', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\MarkerInfoWindowOpenSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.polygon', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\PolygonSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.polyline', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\PolylineSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.rectangle', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\RectangleSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.symbol', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\SymbolSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.utility.object_to_array', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Utility\\ObjectToArraySubscriber');

        return $instance;
    }

    /**
     * Gets the public 'ivory.google_map.helper.map.static' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\StaticMapHelper
     */
    protected function getIvory_GoogleMap_Helper_Map_StaticService()
    {
        return $this->services['ivory.google_map.helper.map.static'] = new \Ivory\GoogleMap\Helper\StaticMapHelper($this->get('ivory.google_map.helper.map.static.event_dispatcher'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.map.static.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getIvory_GoogleMap_Helper_Map_Static_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.map.static.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\StaticSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.center', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\CenterSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.encoded_polyline', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\EncodedPolylineSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.extendable', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\ExtendableSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.format', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\FormatSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.key', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\KeySubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.marker', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\MarkerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.polyline', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\PolylineSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.scale', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\ScaleSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.size', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\SizeSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.type', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\TypeSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.zoom', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\ZoomSubscriber');

        return $instance;
    }

    /**
     * Gets the public 'ivory.google_map.helper.place_autocomplete' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\PlaceAutocompleteHelper
     */
    protected function getIvory_GoogleMap_Helper_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.helper.place_autocomplete'] = new \Ivory\GoogleMap\Helper\PlaceAutocompleteHelper($this->get('ivory.google_map.helper.place_autocomplete.event_dispatcher'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.place_autocomplete.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getIvory_GoogleMap_Helper_PlaceAutocomplete_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.place_autocomplete.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete_container', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteContainerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete_html', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteHtmlSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete_init', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteInitSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete_javascript', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteJavascriptSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.base', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Base\\AutocompleteBaseSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.base.bound', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Base\\AutocompleteBoundSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Base\\AutocompleteCoordinateSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Event\\AutocompleteEventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Event\\AutocompleteDomEventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Event\\AutocompleteDomEventOnceSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.event.event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Event\\AutocompleteSimpleEventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.event.event_once', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Event\\AutocompleteEventOnceSubscriber');

        return $instance;
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.api' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\ApiRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_ApiService()
    {
        return $this->services['ivory.google_map.helper.renderer.api'] = new \Ivory\GoogleMap\Helper\Renderer\ApiRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.api_init'), $this->get('ivory.google_map.helper.renderer.loader'), $this->get('ivory.google_map.helper.renderer.utility.requirement_loader'), $this->get('ivory.google_map.helper.renderer.utility.source'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.api_init' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\ApiInitRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_ApiInitService()
    {
        return $this->services['ivory.google_map.helper.renderer.api_init'] = new \Ivory\GoogleMap\Helper\Renderer\ApiInitRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.base.bound' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\BoundRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.bound'] = new \Ivory\GoogleMap\Helper\Renderer\Base\BoundRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.base.coordinate' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\CoordinateRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.coordinate'] = new \Ivory\GoogleMap\Helper\Renderer\Base\CoordinateRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.base.point' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\PointRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.point'] = new \Ivory\GoogleMap\Helper\Renderer\Base\PointRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.base.size' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\SizeRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_SizeService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.size'] = new \Ivory\GoogleMap\Helper\Renderer\Base\SizeRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.custom' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\CustomControlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_CustomService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.custom'] = new \Ivory\GoogleMap\Helper\Renderer\Control\CustomControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.fullscreen' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\FullscreenControlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_FullscreenService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.fullscreen'] = new \Ivory\GoogleMap\Helper\Renderer\Control\FullscreenControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.manager' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ControlManagerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ManagerService()
    {
        $this->services['ivory.google_map.helper.renderer.control.manager'] = $instance = new \Ivory\GoogleMap\Helper\Renderer\Control\ControlManagerRenderer();

        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.fullscreen'));
        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.map_type'));
        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.rotate'));
        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.scale'));
        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.street_view'));
        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.zoom'));

        return $instance;
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.map_type' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_MapTypeService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.map_type'] = new \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.map_type_id'), $this->get('ivory.google_map.helper.renderer.control.position'), $this->get('ivory.google_map.helper.renderer.control.map_type_style'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.map_type_style' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlStyleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_MapTypeStyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.map_type_style'] = new \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlStyleRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.position' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ControlPositionRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_PositionService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.position'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ControlPositionRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.rotate' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\RotateControlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_RotateService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.rotate'] = new \Ivory\GoogleMap\Helper\Renderer\Control\RotateControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.scale' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ScaleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.scale'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'), $this->get('ivory.google_map.helper.renderer.control.scale_style'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.scale_style' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlStyleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ScaleStyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.scale_style'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlStyleRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.street_view' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\StreetViewControlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_StreetViewService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.street_view'] = new \Ivory\GoogleMap\Helper\Renderer\Control\StreetViewControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.zoom' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ZoomService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.zoom'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'), $this->get('ivory.google_map.helper.renderer.control.zoom_style'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.control.zoom_style' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlStyleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ZoomStyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.zoom_style'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlStyleRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.event.dom_event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\DomEventRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.dom_event'] = new \Ivory\GoogleMap\Helper\Renderer\Event\DomEventRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.event.dom_event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\DomEventOnceRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Renderer\Event\DomEventOnceRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.event.event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\EventRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.event'] = new \Ivory\GoogleMap\Helper\Renderer\Event\EventRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.event.event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\EventOnceRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.event_once'] = new \Ivory\GoogleMap\Helper\Renderer\Event\EventOnceRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.geometry.encoding' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Geometry\EncodingRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Geometry_EncodingService()
    {
        return $this->services['ivory.google_map.helper.renderer.geometry.encoding'] = new \Ivory\GoogleMap\Helper\Renderer\Geometry\EncodingRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.html.javascript_tag' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\JavascriptTagRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_JavascriptTagService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.javascript_tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\JavascriptTagRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.html.stylesheet' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_StylesheetService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.stylesheet'] = new \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.html.stylesheet_tag' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetTagRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_StylesheetTagService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.stylesheet_tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetTagRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'), $this->get('ivory.google_map.helper.renderer.html.stylesheet'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.html.tag' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\TagRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_TagService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\TagRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.layer.geo_json' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Layer\GeoJsonLayerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Layer_GeoJsonService()
    {
        return $this->services['ivory.google_map.helper.renderer.layer.geo_json'] = new \Ivory\GoogleMap\Helper\Renderer\Layer\GeoJsonLayerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.layer.heatmap' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Layer\HeatmapLayerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Layer_HeatmapService()
    {
        return $this->services['ivory.google_map.helper.renderer.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Renderer\Layer\HeatmapLayerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.layer.kml' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Layer\KmlLayerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Layer_KmlService()
    {
        return $this->services['ivory.google_map.helper.renderer.layer.kml'] = new \Ivory\GoogleMap\Helper\Renderer\Layer\KmlLayerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.loader' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\LoaderRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_LoaderService()
    {
        return $this->services['ivory.google_map.helper.renderer.loader'] = new \Ivory\GoogleMap\Helper\Renderer\LoaderRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), 'fr');
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.map' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapService()
    {
        return $this->services['ivory.google_map.helper.renderer.map'] = new \Ivory\GoogleMap\Helper\Renderer\MapRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.map_type_id'), $this->get('ivory.google_map.helper.renderer.control.manager'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.map_bound' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapBoundRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapBoundService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_bound'] = new \Ivory\GoogleMap\Helper\Renderer\MapBoundRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.map_center' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapCenterRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapCenterService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_center'] = new \Ivory\GoogleMap\Helper\Renderer\MapCenterRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.map_container' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapContainerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapContainerService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_container'] = new \Ivory\GoogleMap\Helper\Renderer\MapContainerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.map_html' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapHtmlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapHtmlService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_html'] = new \Ivory\GoogleMap\Helper\Renderer\MapHtmlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'), $this->get('ivory.google_map.helper.renderer.html.stylesheet'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.map_type_id' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapTypeIdRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapTypeIdService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_type_id'] = new \Ivory\GoogleMap\Helper\Renderer\MapTypeIdRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.animation' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\AnimationRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_AnimationService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.animation'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\AnimationRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.circle' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\CircleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_CircleService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.circle'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\CircleRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.encoded_polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\EncodedPolylineRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\EncodedPolylineRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.geometry.encoding'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.extendable' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\ExtendableRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_ExtendableService()
    {
        $a = $this->get('ivory.google_map.helper.renderer.overlay.extendable.path');
        $b = $this->get('ivory.google_map.helper.renderer.overlay.extendable.position');
        $c = $this->get('ivory.google_map.helper.renderer.overlay.extendable.bounds');

        $this->services['ivory.google_map.helper.renderer.overlay.extendable'] = $instance = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\ExtendableRenderer();

        $instance->setRenderer('Ivory\\GoogleMap\\Layer\\KmlLayer', $this->get('ivory.google_map.helper.renderer.overlay.extendable.default_viewport'));
        $instance->setRenderer('Ivory\\GoogleMap\\Layer\\HeatmapLayer', $this->get('ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer'));
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\EncodedPolyline', $a);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Polyline', $a);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Polygon', $a);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\InfoWindow', $b);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Marker', $b);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Circle', $c);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\GroundOverlay', $c);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Rectangle', $c);

        return $instance;
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.extendable.bounds' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\BoundsExtendableRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_BoundsService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.bounds'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\BoundsExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.extendable.default_viewport' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\DefaultViewportExtendableRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_DefaultViewportService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.default_viewport'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\DefaultViewportExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\HeatmapLayerExtendableRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_HeatmapLayerService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\HeatmapLayerExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.extendable.path' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PathExtendableRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PathService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.path'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PathExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.extendable.position' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PositionExtendableRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PositionService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.position'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PositionExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.ground_overlay' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\GroundOverlayRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_GroundOverlayService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\GroundOverlayRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.icon' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\IconRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_IconService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.icon'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\IconRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.icon_sequence' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\IconSequenceRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_IconSequenceService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.icon_sequence'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\IconSequenceRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.info_box' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoBoxRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoBoxService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoBoxRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.info_window.close' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowCloseRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_CloseService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_window.close'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowCloseRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.info_window.default' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\DefaultInfoWindowRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_DefaultService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_window.default'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\DefaultInfoWindowRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.info_window.open' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowOpenRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_OpenService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_window.open'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowOpenRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.marker' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.marker'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.overlay.animation'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.marker_clusterer' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerClustererRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerClustererService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.marker_clusterer'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerClustererRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.marker_shape' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerShapeRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerShapeService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerShapeRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.polygon' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\PolygonRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_PolygonService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\PolygonRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\PolylineRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\PolylineRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.rectangle' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\RectangleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_RectangleService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\RectangleRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.symbol' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.overlay.symbol_path'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.overlay.symbol_path' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolPathRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolPathService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.symbol_path'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolPathRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.place.autocomplete' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteService()
    {
        return $this->services['ivory.google_map.helper.renderer.place.autocomplete'] = new \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.place.autocomplete_container' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteContainerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteContainerService()
    {
        return $this->services['ivory.google_map.helper.renderer.place.autocomplete_container'] = new \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteContainerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.html.tag'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.place.autocomplete_html' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteHtmlRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteHtmlService()
    {
        return $this->services['ivory.google_map.helper.renderer.place.autocomplete_html'] = new \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteHtmlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.base.coordinate' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Base\CoordinateRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.base.coordinate'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Base\CoordinateRenderer();
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.base.point' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Base\PointRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.base.point'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Base\PointRenderer();
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.encoded_polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineRenderer($this->get('ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style'), $this->get('ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineStyleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_StyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineStyleRenderer();
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineValueRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_ValueService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineValueRenderer();
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.extendable' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\ExtendableRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.extendable'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\ExtendableRenderer($this->get('ivory.google_map.helper.renderer.static.base.coordinate'), $this->get('ivory.google_map.helper.renderer.static.overlay.marker.location'), $this->get('ivory.google_map.helper.renderer.static.overlay.polyline.location'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.marker' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.marker'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerRenderer($this->get('ivory.google_map.helper.renderer.static.overlay.marker.style'), $this->get('ivory.google_map.helper.renderer.static.overlay.marker.location'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.marker.location' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerLocationRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_LocationService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.marker.location'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerLocationRenderer($this->get('ivory.google_map.helper.renderer.static.base.coordinate'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.marker.style' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerStyleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_StyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.marker.style'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerStyleRenderer($this->get('ivory.google_map.helper.renderer.static.base.point'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineRenderer($this->get('ivory.google_map.helper.renderer.static.overlay.polyline.style'), $this->get('ivory.google_map.helper.renderer.static.overlay.polyline.location'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.polyline.location' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineLocationRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_LocationService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.polyline.location'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineLocationRenderer($this->get('ivory.google_map.helper.renderer.static.base.coordinate'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.overlay.polyline.style' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineStyleRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_StyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.polyline.style'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineStyleRenderer();
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.static.size' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\SizeRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_SizeService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.size'] = new \Ivory\GoogleMap\Helper\Renderer\Image\SizeRenderer();
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.utility.callback' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\CallbackRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_CallbackService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.callback'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\CallbackRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.utility.object_to_array' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\ObjectToArrayRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_ObjectToArrayService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.object_to_array'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\ObjectToArrayRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.utility.requirement' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_RequirementService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.requirement'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.utility.requirement_loader' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementLoaderRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_RequirementLoaderService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.requirement_loader'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementLoaderRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.renderer.utility.source' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\SourceRenderer
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_SourceService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.source'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\SourceRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.api_javascript' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\ApiJavascriptSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_ApiJavascriptService()
    {
        return $this->services['ivory.google_map.helper.subscriber.api_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\ApiJavascriptSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.api'), $this->get('ivory.google_map.helper.renderer.html.javascript_tag'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.base' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\BaseSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_BaseService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\BaseSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.base.bound' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\BoundSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.bound'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\BoundSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.bound'), $this->get('ivory.google_map.helper.renderer.base.bound'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.base.coordinate' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\CoordinateSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.coordinate'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\CoordinateSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.coordinate'), $this->get('ivory.google_map.helper.renderer.base.coordinate'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.base.point' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\PointSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.point'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\PointSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.point'), $this->get('ivory.google_map.helper.renderer.base.point'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.base.size' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\SizeSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_SizeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.size'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\SizeSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.size'), $this->get('ivory.google_map.helper.renderer.base.size'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.control' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Control\ControlSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_ControlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.control'] = new \Ivory\GoogleMap\Helper\Subscriber\Control\ControlSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.control.custom' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Control\CustomControlSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Control_CustomService()
    {
        return $this->services['ivory.google_map.helper.subscriber.control.custom'] = new \Ivory\GoogleMap\Helper\Subscriber\Control\CustomControlSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.control.custom'), $this->get('ivory.google_map.helper.renderer.control.custom'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\EventSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\EventSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.event.dom_event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.dom_event'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.dom_event'), $this->get('ivory.google_map.helper.renderer.event.dom_event'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.event.dom_event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventOnceSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.dom_event_once'), $this->get('ivory.google_map.helper.renderer.event.dom_event_once'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.event.event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\SimpleEventSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\SimpleEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.event'), $this->get('ivory.google_map.helper.renderer.event.event'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.event.event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\EventOnceSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\EventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.event_once'), $this->get('ivory.google_map.helper.renderer.event.event_once'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.layer' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\LayerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_LayerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\LayerSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.layer.geo_json' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\GeoJsonLayerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Layer_GeoJsonService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer.geo_json'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\GeoJsonLayerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.layer.geo_json'), $this->get('ivory.google_map.helper.renderer.layer.geo_json'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.layer.heatmap' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\HeatmapLayerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Layer_HeatmapService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\HeatmapLayerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.layer.heatmap'), $this->get('ivory.google_map.helper.renderer.layer.heatmap'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.layer.kml' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\KmlLayerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Layer_KmlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer.kml'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\KmlLayerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.layer.kml'), $this->get('ivory.google_map.helper.renderer.layer.kml'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map'] = new \Ivory\GoogleMap\Helper\Subscriber\MapSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map_bound' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapBoundSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapBoundService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_bound'] = new \Ivory\GoogleMap\Helper\Subscriber\MapBoundSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_bound'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map_center' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapCenterSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapCenterService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_center'] = new \Ivory\GoogleMap\Helper\Subscriber\MapCenterSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_center'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map_container' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapContainerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapContainerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_container'] = new \Ivory\GoogleMap\Helper\Subscriber\MapContainerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_container'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map_html' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapHtmlSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapHtmlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_html'] = new \Ivory\GoogleMap\Helper\Subscriber\MapHtmlSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_html'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map_init' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapInitSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapInitService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_init'] = new \Ivory\GoogleMap\Helper\Subscriber\MapInitSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map_javascript' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapJavascriptSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapJavascriptService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\MapJavascriptSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map'), $this->get('ivory.google_map.helper.renderer.utility.callback'), $this->get('ivory.google_map.helper.renderer.html.javascript_tag'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.map_stylehseet' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapStylesheetSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapStylehseetService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_stylehseet'] = new \Ivory\GoogleMap\Helper\Subscriber\MapStylesheetSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.stylesheet_tag'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\OverlaySubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_OverlayService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\OverlaySubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.circle' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\CircleSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_CircleService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.circle'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\CircleSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.circle'), $this->get('ivory.google_map.helper.renderer.overlay.circle'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.encoded_polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\EncodedPolylineSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\EncodedPolylineSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.encoded_polyline'), $this->get('ivory.google_map.helper.renderer.overlay.encoded_polyline'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.extendable' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\ExtendableSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.extendable'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\ExtendableSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.extendable'), $this->get('ivory.google_map.helper.renderer.overlay.extendable'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.ground_overlay' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\GroundOverlaySubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_GroundOverlayService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\GroundOverlaySubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.ground_overlay'), $this->get('ivory.google_map.helper.renderer.overlay.ground_overlay'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.icon' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_IconService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.icon'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.icon'), $this->get('ivory.google_map.helper.renderer.overlay.icon'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.icon_sequence' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSequenceSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_IconSequenceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.icon_sequence'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSequenceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.icon_sequence'), $this->get('ivory.google_map.helper.renderer.overlay.icon_sequence'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.info_box' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoBoxSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoBoxService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoBoxSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_box'), $this->get('ivory.google_map.helper.renderer.overlay.info_box'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.info_window.close' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowCloseSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_CloseService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.close'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowCloseSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.close'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.info_window.default' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\DefaultInfoWindowSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_DefaultService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.default'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\DefaultInfoWindowSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_window.default'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.default'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.info_window.open' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowOpenSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_OpenService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.open'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowOpenSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.open'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.marker' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.renderer.overlay.marker'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.marker.info_window.open' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerInfoWindowOpenSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_Marker_InfoWindow_OpenService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker.info_window.open'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerInfoWindowOpenSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.open'), $this->get('ivory.google_map.helper.renderer.event.event'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.marker_clusterer' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerClustererSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerClustererService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker_clusterer'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerClustererSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.overlay.marker_clusterer'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.marker_shape' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerShapeSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerShapeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerShapeSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.marker_shape'), $this->get('ivory.google_map.helper.renderer.overlay.marker_shape'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.polygon' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolygonSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_PolygonService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolygonSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.polygon'), $this->get('ivory.google_map.helper.renderer.overlay.polygon'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolylineSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolylineSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.polyline'), $this->get('ivory.google_map.helper.renderer.overlay.polyline'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.rectangle' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\RectangleSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_RectangleService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\RectangleSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.rectangle'), $this->get('ivory.google_map.helper.renderer.overlay.rectangle'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.overlay.symbol' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\SymbolSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_SymbolService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\SymbolSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.symbol'), $this->get('ivory.google_map.helper.renderer.overlay.symbol'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.base' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBaseSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_BaseService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBaseSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.base.bound' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBoundSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base.bound'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBoundSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.base.bound'), $this->get('ivory.google_map.helper.renderer.base.bound'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteCoordinateSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteCoordinateSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.base.coordinate'), $this->get('ivory.google_map.helper.renderer.base.coordinate'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.dom_event'), $this->get('ivory.google_map.helper.renderer.event.dom_event'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventOnceSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once'), $this->get('ivory.google_map.helper.renderer.event.dom_event_once'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.event.event' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteSimpleEventSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteSimpleEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.event'), $this->get('ivory.google_map.helper.renderer.event.event'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete.event.event_once' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventOnceSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.event_once'), $this->get('ivory.google_map.helper.renderer.event.event_once'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete_container' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteContainerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteContainerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_container'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteContainerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete_container'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete_html' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteHtmlSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteHtmlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_html'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteHtmlSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete_html'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete_init' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteInitSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteInitService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_init'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteInitSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.place.autocomplete_javascript' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteJavascriptSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteJavascriptService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteJavascriptSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete'), $this->get('ivory.google_map.helper.renderer.utility.callback'), $this->get('ivory.google_map.helper.renderer.html.javascript_tag'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\StaticSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_StaticService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\StaticSubscriber();
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.center' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\CenterSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_CenterService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.center'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\CenterSubscriber($this->get('ivory.google_map.helper.renderer.static.base.coordinate'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.encoded_polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\EncodedPolylineSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\EncodedPolylineSubscriber($this->get('ivory.google_map.helper.collector.static.encoded_polyline'), $this->get('ivory.google_map.helper.renderer.static.overlay.encoded_polyline'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.extendable' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\ExtendableSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.extendable'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\ExtendableSubscriber($this->get('ivory.google_map.helper.collector.static.extendable'), $this->get('ivory.google_map.helper.renderer.static.overlay.extendable'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.format' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\FormatSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_FormatService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.format'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\FormatSubscriber();
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.key' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\KeySubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_KeyService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.key'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\KeySubscriber();
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.marker' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\MarkerSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_MarkerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.marker'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\MarkerSubscriber($this->get('ivory.google_map.helper.collector.static.marker'), $this->get('ivory.google_map.helper.renderer.static.overlay.marker'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.polyline' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\PolylineSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_PolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\PolylineSubscriber($this->get('ivory.google_map.helper.collector.static.polyline'), $this->get('ivory.google_map.helper.renderer.static.overlay.polyline'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.scale' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\ScaleSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_ScaleService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.scale'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\ScaleSubscriber();
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.size' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\SizeSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_SizeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.size'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\SizeSubscriber($this->get('ivory.google_map.helper.renderer.static.size'));
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.type' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\TypeSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_TypeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.type'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\TypeSubscriber();
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.static.zoom' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\ZoomSubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_ZoomService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.zoom'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\ZoomSubscriber();
    }

    /**
     * Gets the public 'ivory.google_map.helper.subscriber.utility.object_to_array' shared service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Utility\ObjectToArraySubscriber
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Utility_ObjectToArrayService()
    {
        return $this->services['ivory.google_map.helper.subscriber.utility.object_to_array'] = new \Ivory\GoogleMap\Helper\Subscriber\Utility\ObjectToArraySubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.utility.object_to_array'));
    }

    /**
     * Gets the public 'ivory.google_map.twig.extension.api' shared service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\ApiExtension
     */
    protected function getIvory_GoogleMap_Twig_Extension_ApiService()
    {
        return $this->services['ivory.google_map.twig.extension.api'] = new \Ivory\GoogleMapBundle\Twig\ApiExtension($this->get('ivory.google_map.helper.api'));
    }

    /**
     * Gets the public 'ivory.google_map.twig.extension.map' shared service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\MapExtension
     */
    protected function getIvory_GoogleMap_Twig_Extension_MapService()
    {
        return $this->services['ivory.google_map.twig.extension.map'] = new \Ivory\GoogleMapBundle\Twig\MapExtension($this->get('ivory.google_map.helper.map'));
    }

    /**
     * Gets the public 'ivory.google_map.twig.extension.map.static' shared service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\StaticMapExtension
     */
    protected function getIvory_GoogleMap_Twig_Extension_Map_StaticService()
    {
        return $this->services['ivory.google_map.twig.extension.map.static'] = new \Ivory\GoogleMapBundle\Twig\StaticMapExtension($this->get('ivory.google_map.helper.map.static'));
    }

    /**
     * Gets the public 'ivory.google_map.twig.extension.place_autocomplete' shared service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension
     */
    protected function getIvory_GoogleMap_Twig_Extension_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.twig.extension.place_autocomplete'] = new \Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension($this->get('ivory.google_map.helper.place_autocomplete'));
    }

    /**
     * Gets the public 'ivory.serializer' shared service.
     *
     * @return \Ivory\Serializer\Serializer
     */
    protected function getIvory_SerializerService()
    {
        return $this->services['ivory.serializer'] = new \Ivory\Serializer\Serializer($this->get('ivory.serializer.navigator.event'), $this->get('ivory.serializer.registry.visitor'), $this->get('ivory.serializer.type.parser'));
    }

    /**
     * Gets the public 'ivory.serializer.accessor' shared service.
     *
     * @return \Ivory\Serializer\Accessor\ReflectionAccessor
     */
    protected function getIvory_Serializer_AccessorService()
    {
        return $this->services['ivory.serializer.accessor'] = new \Ivory\Serializer\Accessor\ReflectionAccessor();
    }

    /**
     * Gets the public 'ivory.serializer.event.dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getIvory_Serializer_Event_DispatcherService()
    {
        return $this->services['ivory.serializer.event.dispatcher'] = new \Symfony\Component\EventDispatcher\EventDispatcher();
    }

    /**
     * Gets the public 'ivory.serializer.instantiator' shared service.
     *
     * @return \Ivory\Serializer\Instantiator\DoctrineInstantiator
     */
    protected function getIvory_Serializer_InstantiatorService()
    {
        return $this->services['ivory.serializer.instantiator'] = new \Ivory\Serializer\Instantiator\DoctrineInstantiator();
    }

    /**
     * Gets the public 'ivory.serializer.mapping.factory.default' shared service.
     *
     * @return \Ivory\Serializer\Mapping\Factory\ClassMetadataFactory
     */
    protected function getIvory_Serializer_Mapping_Factory_DefaultService()
    {
        return $this->services['ivory.serializer.mapping.factory.default'] = new \Ivory\Serializer\Mapping\Factory\ClassMetadataFactory($this->get('ivory.serializer.mapping.loader'));
    }

    /**
     * Gets the public 'ivory.serializer.mapping.factory.event' shared service.
     *
     * @return \Ivory\Serializer\Mapping\Factory\EventClassMetadataFactory
     */
    protected function getIvory_Serializer_Mapping_Factory_EventService()
    {
        return $this->services['ivory.serializer.mapping.factory.event'] = new \Ivory\Serializer\Mapping\Factory\EventClassMetadataFactory($this->get('ivory.serializer.mapping.factory.default'), $this->get('ivory.serializer.event.dispatcher'));
    }

    /**
     * Gets the public 'ivory.serializer.mapping.loader' shared service.
     *
     * @return \Ivory\Serializer\Mapping\Loader\ChainClassMetadataLoader
     */
    protected function getIvory_Serializer_Mapping_LoaderService()
    {
        return $this->services['ivory.serializer.mapping.loader'] = new \Ivory\Serializer\Mapping\Loader\ChainClassMetadataLoader(array(0 => $this->get('ivory.serializer.mapping.loader.reflection'), 1 => $this->get('ivory.serializer.mapping.loader.annotation')), $this->get('ivory.serializer.type.parser'));
    }

    /**
     * Gets the public 'ivory.serializer.mapping.loader.annotation' shared service.
     *
     * @return \Ivory\Serializer\Mapping\Loader\AnnotationClassMetadataLoader
     */
    protected function getIvory_Serializer_Mapping_Loader_AnnotationService()
    {
        return $this->services['ivory.serializer.mapping.loader.annotation'] = new \Ivory\Serializer\Mapping\Loader\AnnotationClassMetadataLoader($this->get('annotation_reader'), $this->get('ivory.serializer.type.parser'));
    }

    /**
     * Gets the public 'ivory.serializer.mapping.loader.reflection' shared service.
     *
     * @return \Ivory\Serializer\Mapping\Loader\ReflectionClassMetadataLoader
     */
    protected function getIvory_Serializer_Mapping_Loader_ReflectionService()
    {
        return $this->services['ivory.serializer.mapping.loader.reflection'] = new \Ivory\Serializer\Mapping\Loader\ReflectionClassMetadataLoader(NULL, $this->get('ivory.serializer.type.parser'));
    }

    /**
     * Gets the public 'ivory.serializer.mutator' shared service.
     *
     * @return \Ivory\Serializer\Mutator\ReflectionMutator
     */
    protected function getIvory_Serializer_MutatorService()
    {
        return $this->services['ivory.serializer.mutator'] = new \Ivory\Serializer\Mutator\ReflectionMutator();
    }

    /**
     * Gets the public 'ivory.serializer.navigator.default' shared service.
     *
     * @return \Ivory\Serializer\Navigator\Navigator
     */
    protected function getIvory_Serializer_Navigator_DefaultService()
    {
        return $this->services['ivory.serializer.navigator.default'] = new \Ivory\Serializer\Navigator\Navigator($this->get('ivory.serializer.registry.type'), $this->get('ivory.serializer.type.guesser'));
    }

    /**
     * Gets the public 'ivory.serializer.navigator.event' shared service.
     *
     * @return \Ivory\Serializer\Navigator\EventNavigator
     */
    protected function getIvory_Serializer_Navigator_EventService()
    {
        return $this->services['ivory.serializer.navigator.event'] = new \Ivory\Serializer\Navigator\EventNavigator($this->get('ivory.serializer.navigator.default'), $this->get('ivory.serializer.event.dispatcher'));
    }

    /**
     * Gets the public 'ivory.serializer.registry.type' shared service.
     *
     * @return \Ivory\Serializer\Registry\TypeRegistry
     */
    protected function getIvory_Serializer_Registry_TypeService()
    {
        $a = $this->get('ivory.serializer.type.array');
        $b = $this->get('ivory.serializer.type.boolean');
        $c = $this->get('ivory.serializer.type.closure');
        $d = $this->get('ivory.serializer.type.date_time');
        $e = $this->get('ivory.serializer.type.exception');
        $f = $this->get('ivory.serializer.type.float');
        $g = $this->get('ivory.serializer.type.form');
        $h = $this->get('ivory.serializer.type.form_error');
        $i = $this->get('ivory.serializer.type.integer');
        $j = $this->get('ivory.serializer.type.null');
        $k = $this->get('ivory.serializer.type.object');
        $l = $this->get('ivory.serializer.type.resource');
        $m = $this->get('ivory.serializer.type.std_class');
        $n = $this->get('ivory.serializer.type.string');

        $this->services['ivory.serializer.registry.type'] = $instance = new \Ivory\Serializer\Registry\TypeRegistry();

        $instance->registerType('array', 1, $a);
        $instance->registerType('bool', 1, $b);
        $instance->registerType('boolean', 1, $b);
        $instance->registerType('closure', 1, $c);
        $instance->registerType('DateTimeInterface', 1, $d);
        $instance->registerType('Exception', 1, $e);
        $instance->registerType('double', 1, $f);
        $instance->registerType('float', 1, $f);
        $instance->registerType('numeric', 1, $f);
        $instance->registerType('Symfony\\Component\\Form\\Form', 1, $g);
        $instance->registerType('Symfony\\Component\\Form\\FormError', 1, $h);
        $instance->registerType('int', 1, $i);
        $instance->registerType('integer', 1, $i);
        $instance->registerType('null', 1, $j);
        $instance->registerType('object', 1, $k);
        $instance->registerType('resource', 1, $l);
        $instance->registerType('stdClass', 1, $m);
        $instance->registerType('string', 1, $n);
        $instance->registerType('array', 2, $a);
        $instance->registerType('bool', 2, $b);
        $instance->registerType('boolean', 2, $b);
        $instance->registerType('closure', 2, $c);
        $instance->registerType('DateTimeInterface', 2, $d);
        $instance->registerType('Exception', 2, $e);
        $instance->registerType('double', 2, $f);
        $instance->registerType('float', 2, $f);
        $instance->registerType('numeric', 2, $f);
        $instance->registerType('Symfony\\Component\\Form\\Form', 2, $g);
        $instance->registerType('Symfony\\Component\\Form\\FormError', 2, $h);
        $instance->registerType('int', 2, $i);
        $instance->registerType('integer', 2, $i);
        $instance->registerType('null', 2, $j);
        $instance->registerType('object', 2, $k);
        $instance->registerType('resource', 2, $l);
        $instance->registerType('stdClass', 2, $m);
        $instance->registerType('string', 2, $n);

        return $instance;
    }

    /**
     * Gets the public 'ivory.serializer.registry.visitor' shared service.
     *
     * @return \Ivory\Serializer\Registry\VisitorRegistry
     */
    protected function getIvory_Serializer_Registry_VisitorService()
    {
        $this->services['ivory.serializer.registry.visitor'] = $instance = new \Ivory\Serializer\Registry\VisitorRegistry();

        $instance->registerVisitor(1, 'csv', $this->get('ivory.serializer.visitor.csv.serialization'));
        $instance->registerVisitor(2, 'csv', $this->get('ivory.serializer.visitor.csv.deserialization'));
        $instance->registerVisitor(1, 'json', $this->get('ivory.serializer.visitor.json.serialization'));
        $instance->registerVisitor(2, 'json', $this->get('ivory.serializer.visitor.json.deserialization'));
        $instance->registerVisitor(1, 'xml', $this->get('ivory.serializer.visitor.xml.serialization'));
        $instance->registerVisitor(2, 'xml', $this->get('ivory.serializer.visitor.xml.deserialization'));
        $instance->registerVisitor(1, 'yaml', $this->get('ivory.serializer.visitor.yaml.serialization'));
        $instance->registerVisitor(2, 'yaml', $this->get('ivory.serializer.visitor.yaml.deserialization'));

        return $instance;
    }

    /**
     * Gets the public 'ivory.serializer.type.array' shared service.
     *
     * @return \Ivory\Serializer\Type\ArrayType
     */
    protected function getIvory_Serializer_Type_ArrayService()
    {
        return $this->services['ivory.serializer.type.array'] = new \Ivory\Serializer\Type\ArrayType();
    }

    /**
     * Gets the public 'ivory.serializer.type.boolean' shared service.
     *
     * @return \Ivory\Serializer\Type\BooleanType
     */
    protected function getIvory_Serializer_Type_BooleanService()
    {
        return $this->services['ivory.serializer.type.boolean'] = new \Ivory\Serializer\Type\BooleanType();
    }

    /**
     * Gets the public 'ivory.serializer.type.closure' shared service.
     *
     * @return \Ivory\Serializer\Type\ClosureType
     */
    protected function getIvory_Serializer_Type_ClosureService()
    {
        return $this->services['ivory.serializer.type.closure'] = new \Ivory\Serializer\Type\ClosureType();
    }

    /**
     * Gets the public 'ivory.serializer.type.date_time' shared service.
     *
     * @return \Ivory\Serializer\Type\DateTimeType
     */
    protected function getIvory_Serializer_Type_DateTimeService()
    {
        return $this->services['ivory.serializer.type.date_time'] = new \Ivory\Serializer\Type\DateTimeType('Y-m-d\\TH:i:sP', 'Africa/Algiers');
    }

    /**
     * Gets the public 'ivory.serializer.type.exception' shared service.
     *
     * @return \Ivory\Serializer\Type\ExceptionType
     */
    protected function getIvory_Serializer_Type_ExceptionService()
    {
        return $this->services['ivory.serializer.type.exception'] = new \Ivory\Serializer\Type\ExceptionType(true);
    }

    /**
     * Gets the public 'ivory.serializer.type.float' shared service.
     *
     * @return \Ivory\Serializer\Type\FloatType
     */
    protected function getIvory_Serializer_Type_FloatService()
    {
        return $this->services['ivory.serializer.type.float'] = new \Ivory\Serializer\Type\FloatType();
    }

    /**
     * Gets the public 'ivory.serializer.type.form' shared service.
     *
     * @return \Ivory\SerializerBundle\Type\FormType
     */
    protected function getIvory_Serializer_Type_FormService()
    {
        return $this->services['ivory.serializer.type.form'] = new \Ivory\SerializerBundle\Type\FormType();
    }

    /**
     * Gets the public 'ivory.serializer.type.form_error' shared service.
     *
     * @return \Ivory\SerializerBundle\Type\FormErrorType
     */
    protected function getIvory_Serializer_Type_FormErrorService()
    {
        return $this->services['ivory.serializer.type.form_error'] = new \Ivory\SerializerBundle\Type\FormErrorType($this->get('translator', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'ivory.serializer.type.guesser' shared service.
     *
     * @return \Ivory\Serializer\Type\Guesser\TypeGuesser
     */
    protected function getIvory_Serializer_Type_GuesserService()
    {
        return $this->services['ivory.serializer.type.guesser'] = new \Ivory\Serializer\Type\Guesser\TypeGuesser();
    }

    /**
     * Gets the public 'ivory.serializer.type.integer' shared service.
     *
     * @return \Ivory\Serializer\Type\IntegerType
     */
    protected function getIvory_Serializer_Type_IntegerService()
    {
        return $this->services['ivory.serializer.type.integer'] = new \Ivory\Serializer\Type\IntegerType();
    }

    /**
     * Gets the public 'ivory.serializer.type.lexer' shared service.
     *
     * @return \Ivory\Serializer\Type\Parser\TypeLexer
     */
    protected function getIvory_Serializer_Type_LexerService()
    {
        return $this->services['ivory.serializer.type.lexer'] = new \Ivory\Serializer\Type\Parser\TypeLexer();
    }

    /**
     * Gets the public 'ivory.serializer.type.null' shared service.
     *
     * @return \Ivory\Serializer\Type\NullType
     */
    protected function getIvory_Serializer_Type_NullService()
    {
        return $this->services['ivory.serializer.type.null'] = new \Ivory\Serializer\Type\NullType();
    }

    /**
     * Gets the public 'ivory.serializer.type.object' shared service.
     *
     * @return \Ivory\Serializer\Type\ObjectType
     */
    protected function getIvory_Serializer_Type_ObjectService()
    {
        return $this->services['ivory.serializer.type.object'] = new \Ivory\Serializer\Type\ObjectType($this->get('ivory.serializer.mapping.factory.default'));
    }

    /**
     * Gets the public 'ivory.serializer.type.parser' shared service.
     *
     * @return \Ivory\Serializer\Type\Parser\TypeParser
     */
    protected function getIvory_Serializer_Type_ParserService()
    {
        return $this->services['ivory.serializer.type.parser'] = new \Ivory\Serializer\Type\Parser\TypeParser($this->get('ivory.serializer.type.lexer'));
    }

    /**
     * Gets the public 'ivory.serializer.type.resource' shared service.
     *
     * @return \Ivory\Serializer\Type\ResourceType
     */
    protected function getIvory_Serializer_Type_ResourceService()
    {
        return $this->services['ivory.serializer.type.resource'] = new \Ivory\Serializer\Type\ResourceType();
    }

    /**
     * Gets the public 'ivory.serializer.type.std_class' shared service.
     *
     * @return \Ivory\Serializer\Type\StdClassType
     */
    protected function getIvory_Serializer_Type_StdClassService()
    {
        return $this->services['ivory.serializer.type.std_class'] = new \Ivory\Serializer\Type\StdClassType();
    }

    /**
     * Gets the public 'ivory.serializer.type.string' shared service.
     *
     * @return \Ivory\Serializer\Type\StringType
     */
    protected function getIvory_Serializer_Type_StringService()
    {
        return $this->services['ivory.serializer.type.string'] = new \Ivory\Serializer\Type\StringType();
    }

    /**
     * Gets the public 'ivory.serializer.visitor.csv.deserialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Csv\CsvDeserializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Csv_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.csv.deserialization'] = new \Ivory\Serializer\Visitor\Csv\CsvDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), ',', '"', '\\', '.');
    }

    /**
     * Gets the public 'ivory.serializer.visitor.csv.serialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Csv\CsvSerializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Csv_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.csv.serialization'] = new \Ivory\Serializer\Visitor\Csv\CsvSerializationVisitor($this->get('ivory.serializer.accessor'), ',', '"', '\\', '.');
    }

    /**
     * Gets the public 'ivory.serializer.visitor.json.deserialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Json\JsonDeserializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Json_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.json.deserialization'] = new \Ivory\Serializer\Visitor\Json\JsonDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), 512, 0);
    }

    /**
     * Gets the public 'ivory.serializer.visitor.json.serialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Json\JsonSerializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Json_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.json.serialization'] = new \Ivory\Serializer\Visitor\Json\JsonSerializationVisitor($this->get('ivory.serializer.accessor'), 0);
    }

    /**
     * Gets the public 'ivory.serializer.visitor.xml.deserialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Xml\XmlDeserializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Xml_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.xml.deserialization'] = new \Ivory\Serializer\Visitor\Xml\XmlDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), 'entry', 'key');
    }

    /**
     * Gets the public 'ivory.serializer.visitor.xml.serialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Xml\XmlSerializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Xml_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.xml.serialization'] = new \Ivory\Serializer\Visitor\Xml\XmlSerializationVisitor($this->get('ivory.serializer.accessor'), '1.0', 'UTF-8', true, 'result', 'entry', 'key');
    }

    /**
     * Gets the public 'ivory.serializer.visitor.yaml.deserialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Yaml\YamlDeserializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Yaml_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.yaml.deserialization'] = new \Ivory\Serializer\Visitor\Yaml\YamlDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), 0);
    }

    /**
     * Gets the public 'ivory.serializer.visitor.yaml.serialization' shared service.
     *
     * @return \Ivory\Serializer\Visitor\Yaml\YamlSerializationVisitor
     */
    protected function getIvory_Serializer_Visitor_Yaml_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.yaml.serialization'] = new \Ivory\Serializer\Visitor\Yaml\YamlSerializationVisitor($this->get('ivory.serializer.accessor'), 2, 4, 0);
    }

    /**
     * Gets the public 'ivory_ck_editor.command.installer' shared service.
     *
     * @return \Ivory\CKEditorBundle\Command\CKEditorInstallerCommand
     */
    protected function getIvoryCkEditor_Command_InstallerService()
    {
        return $this->services['ivory_ck_editor.command.installer'] = new \Ivory\CKEditorBundle\Command\CKEditorInstallerCommand($this->get('ivory_ck_editor.installer'));
    }

    /**
     * Gets the public 'ivory_ck_editor.config_manager' shared service.
     *
     * @return \Ivory\CKEditorBundle\Model\ConfigManager
     */
    protected function getIvoryCkEditor_ConfigManagerService()
    {
        $this->services['ivory_ck_editor.config_manager'] = $instance = new \Ivory\CKEditorBundle\Model\ConfigManager();

        $instance->setConfigs(array('default' => array('filebrowserBrowseRoute' => 'elfinder', 'filebrowserBrowseRouteParameters' => array('instance' => 'ckeditor')), 'my_config_1' => array('toolbar' => 'my_toolbar_1'), 'my_config_2' => array('toolbar' => 'my_toolbar_2', 'uiColor' => '#ffffff')));
        $instance->setDefaultConfig('default');

        return $instance;
    }

    /**
     * Gets the public 'ivory_ck_editor.form.type' shared service.
     *
     * @return \Ivory\CKEditorBundle\Form\Type\CKEditorType
     */
    protected function getIvoryCkEditor_Form_TypeService()
    {
        return $this->services['ivory_ck_editor.form.type'] = new \Ivory\CKEditorBundle\Form\Type\CKEditorType($this->get('ivory_ck_editor.config_manager'), $this->get('ivory_ck_editor.plugin_manager'), $this->get('ivory_ck_editor.styles_set_manager'), $this->get('ivory_ck_editor.template_manager'), $this->get('ivory_ck_editor.toolbar_manager'));
    }

    /**
     * Gets the public 'ivory_ck_editor.installer' shared service.
     *
     * @return \Ivory\CKEditorBundle\Installer\CKEditorInstaller
     */
    protected function getIvoryCkEditor_InstallerService()
    {
        return $this->services['ivory_ck_editor.installer'] = new \Ivory\CKEditorBundle\Installer\CKEditorInstaller();
    }

    /**
     * Gets the public 'ivory_ck_editor.plugin_manager' shared service.
     *
     * @return \Ivory\CKEditorBundle\Model\PluginManager
     */
    protected function getIvoryCkEditor_PluginManagerService()
    {
        return $this->services['ivory_ck_editor.plugin_manager'] = new \Ivory\CKEditorBundle\Model\PluginManager();
    }

    /**
     * Gets the public 'ivory_ck_editor.renderer' shared service.
     *
     * @return \Ivory\CKEditorBundle\Renderer\CKEditorRenderer
     */
    protected function getIvoryCkEditor_RendererService()
    {
        return $this->services['ivory_ck_editor.renderer'] = new \Ivory\CKEditorBundle\Renderer\CKEditorRenderer($this);
    }

    /**
     * Gets the public 'ivory_ck_editor.renderer.json_builder' shared service.
     *
     * @return \Ivory\JsonBuilder\JsonBuilder
     */
    protected function getIvoryCkEditor_Renderer_JsonBuilderService()
    {
        return $this->services['ivory_ck_editor.renderer.json_builder'] = new \Ivory\JsonBuilder\JsonBuilder($this->get('property_accessor', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'ivory_ck_editor.styles_set_manager' shared service.
     *
     * @return \Ivory\CKEditorBundle\Model\StylesSetManager
     */
    protected function getIvoryCkEditor_StylesSetManagerService()
    {
        return $this->services['ivory_ck_editor.styles_set_manager'] = new \Ivory\CKEditorBundle\Model\StylesSetManager();
    }

    /**
     * Gets the public 'ivory_ck_editor.template_manager' shared service.
     *
     * @return \Ivory\CKEditorBundle\Model\TemplateManager
     */
    protected function getIvoryCkEditor_TemplateManagerService()
    {
        return $this->services['ivory_ck_editor.template_manager'] = new \Ivory\CKEditorBundle\Model\TemplateManager();
    }

    /**
     * Gets the public 'ivory_ck_editor.toolbar_manager' shared service.
     *
     * @return \Ivory\CKEditorBundle\Model\ToolbarManager
     */
    protected function getIvoryCkEditor_ToolbarManagerService()
    {
        $this->services['ivory_ck_editor.toolbar_manager'] = $instance = new \Ivory\CKEditorBundle\Model\ToolbarManager();

        $instance->setToolbars(array('my_toolbar_1' => array(0 => array(0 => 'Bold', 1 => '-', 2 => 'Italic', 3 => 'Underline', 4 => 'NumberedList', 5 => 'BulletedList', 6 => 'JustifyLeft', 7 => 'JustifyCenter', 8 => 'JustifyRight'), 1 => array(0 => 'Styles', 1 => 'Format', 2 => 'Font', 3 => 'FontSize'), 2 => array(0 => 'TextColor', 1 => 'BGColor')), 'my_toolbar_2' => array(0 => array(0 => 'Source'), 1 => '/', 2 => array(0 => 'Anchor'), 3 => '/', 4 => array(0 => 'Maximize'))));

        return $instance;
    }

    /**
     * Gets the public 'ivory_ck_editor.twig_extension' shared service.
     *
     * @return \Ivory\CKEditorBundle\Twig\CKEditorExtension
     */
    protected function getIvoryCkEditor_TwigExtensionService()
    {
        return $this->services['ivory_ck_editor.twig_extension'] = new \Ivory\CKEditorBundle\Twig\CKEditorExtension($this->get('ivory_ck_editor.renderer'));
    }

    /**
     * Gets the public 'kernel' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the public 'kernel.class_cache.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer();
    }

    /**
     * Gets the public 'knp_paginator' shared service.
     *
     * @return \Knp\Component\Pager\Paginator
     */
    protected function getKnpPaginatorService($lazyLoad = true)
    {
        $this->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator($this->get('debug.event_dispatcher'));

        $instance->setDefaultPaginatorOptions(array('pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true));

        return $instance;
    }

    /**
     * Gets the public 'knp_paginator.helper.processor' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Helper\Processor
     */
    protected function getKnpPaginator_Helper_ProcessorService()
    {
        return $this->services['knp_paginator.helper.processor'] = new \Knp\Bundle\PaginatorBundle\Helper\Processor($this->get('router'), $this->get('translator'));
    }

    /**
     * Gets the public 'knp_paginator.subscriber.filtration' shared service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber
     */
    protected function getKnpPaginator_Subscriber_FiltrationService()
    {
        return $this->services['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber();
    }

    /**
     * Gets the public 'knp_paginator.subscriber.paginate' shared service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber
     */
    protected function getKnpPaginator_Subscriber_PaginateService()
    {
        return $this->services['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber();
    }

    /**
     * Gets the public 'knp_paginator.subscriber.sliding_pagination' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->services['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(array('defaultPaginationTemplate' => 'KnpPaginatorBundle:Pagination:sliding.html.twig', 'defaultSortableTemplate' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig', 'defaultFiltrationTemplate' => '@KnpPaginator/Pagination/filtration.html.twig', 'defaultPageRange' => 5));
    }

    /**
     * Gets the public 'knp_paginator.subscriber.sortable' shared service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber
     */
    protected function getKnpPaginator_Subscriber_SortableService()
    {
        return $this->services['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber();
    }

    /**
     * Gets the public 'knp_paginator.twig.extension.pagination' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension
     */
    protected function getKnpPaginator_Twig_Extension_PaginationService()
    {
        return $this->services['knp_paginator.twig.extension.pagination'] = new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension($this->get('knp_paginator.helper.processor'));
    }

    /**
     * Gets the public 'liip_imagine' shared service.
     *
     * @return \Imagine\Gd\Imagine
     */
    protected function getLiipImagineService()
    {
        $this->services['liip_imagine'] = $instance = new \Imagine\Gd\Imagine();

        $instance->setMetadataReader(new \Imagine\Image\Metadata\ExifMetadataReader());

        return $instance;
    }

    /**
     * Gets the public 'liip_imagine.binary.loader.default' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader
     */
    protected function getLiipImagine_Binary_Loader_DefaultService()
    {
        return $this->services['liip_imagine.binary.loader.default'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader($this->get('liip_imagine.mime_type_guesser'), $this->get('liip_imagine.extension_guesser'), array(0 => ($this->targetDirs[2].'/../web')), new \Liip\ImagineBundle\Binary\Locator\FileSystemLocator());
    }

    /**
     * Gets the public 'liip_imagine.binary.loader.prototype.filesystem' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader
     */
    protected function getLiipImagine_Binary_Loader_Prototype_FilesystemService()
    {
        return $this->services['liip_imagine.binary.loader.prototype.filesystem'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader($this->get('liip_imagine.mime_type_guesser'), $this->get('liip_imagine.extension_guesser'), '', '');
    }

    /**
     * Gets the public 'liip_imagine.binary.loader.prototype.stream' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\StreamLoader
     */
    protected function getLiipImagine_Binary_Loader_Prototype_StreamService()
    {
        return $this->services['liip_imagine.binary.loader.prototype.stream'] = new \Liip\ImagineBundle\Binary\Loader\StreamLoader('', '');
    }

    /**
     * Gets the public 'liip_imagine.binary.mime_type_guesser' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser
     */
    protected function getLiipImagine_Binary_MimeTypeGuesserService()
    {
        return $this->services['liip_imagine.binary.mime_type_guesser'] = new \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser($this->get('liip_imagine.mime_type_guesser'));
    }

    /**
     * Gets the public 'liip_imagine.cache.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\CacheManager
     */
    protected function getLiipImagine_Cache_ManagerService()
    {
        $this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager($this->get('liip_imagine.filter.configuration'), $this->get('router'), $this->get('liip_imagine.cache.signer'), $this->get('debug.event_dispatcher'), 'default');

        $instance->addResolver('default', $this->get('liip_imagine.cache.resolver.default'));
        $instance->addResolver('no_cache', $this->get('liip_imagine.cache.resolver.no_cache_web_path'));

        return $instance;
    }

    /**
     * Gets the public 'liip_imagine.cache.resolver.default' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_DefaultService()
    {
        return $this->services['liip_imagine.cache.resolver.default'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver($this->get('filesystem'), $this->get('router.request_context'), ($this->targetDirs[2].'/../web'), 'media/cache');
    }

    /**
     * Gets the public 'liip_imagine.cache.resolver.no_cache_web_path' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver
     */
    protected function getLiipImagine_Cache_Resolver_NoCacheWebPathService()
    {
        return $this->services['liip_imagine.cache.resolver.no_cache_web_path'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver($this->get('router.request_context'));
    }

    /**
     * Gets the public 'liip_imagine.cache.signer' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Signer
     */
    protected function getLiipImagine_Cache_SignerService()
    {
        return $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer('dae049ea70d7f5c500f96eb2ddfghjg2h3j1d7ad40499d508');
    }

    /**
     * Gets the public 'liip_imagine.controller' shared service.
     *
     * @return \Liip\ImagineBundle\Controller\ImagineController
     */
    protected function getLiipImagine_ControllerService()
    {
        return $this->services['liip_imagine.controller'] = new \Liip\ImagineBundle\Controller\ImagineController($this->get('liip_imagine.data.manager'), $this->get('liip_imagine.filter.manager'), $this->get('liip_imagine.cache.manager'), $this->get('liip_imagine.cache.signer'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'liip_imagine.data.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Data\DataManager
     */
    protected function getLiipImagine_Data_ManagerService()
    {
        $this->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager($this->get('liip_imagine.binary.mime_type_guesser'), $this->get('liip_imagine.extension_guesser'), $this->get('liip_imagine.filter.configuration'), 'default', NULL);

        $instance->addLoader('default', $this->get('liip_imagine.binary.loader.default'));

        return $instance;
    }

    /**
     * Gets the public 'liip_imagine.extension_guesser' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesserInterface
     */
    protected function getLiipImagine_ExtensionGuesserService()
    {
        return $this->services['liip_imagine.extension_guesser'] = \Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser::getInstance();
    }

    /**
     * Gets the public 'liip_imagine.filter.configuration' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration
     */
    protected function getLiipImagine_Filter_ConfigurationService()
    {
        return $this->services['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration(array('cache' => array('quality' => 100, 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'filters' => array(), 'post_processors' => array()), 'my_thumb' => array('quality' => 75, 'filters' => array('thumbnail' => array('size' => array(0 => 770, 1 => 332), 'mode' => 'outbound')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'article' => array('quality' => 75, 'filters' => array('thumbnail' => array('size' => array(0 => 370, 1 => 267), 'mode' => 'outbound')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'logo' => array('quality' => 75, 'filters' => array('thumbnail' => array('size' => array(0 => 270, 1 => 145), 'mode' => 'outbound')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'data_loader' => NULL, 'default_image' => NULL, 'post_processors' => array())));
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.auto_rotate' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_AutoRotateService()
    {
        return $this->services['liip_imagine.filter.loader.auto_rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.background' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_BackgroundService()
    {
        return $this->services['liip_imagine.filter.loader.background'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader($this->get('liip_imagine'));
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.crop' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_CropService()
    {
        return $this->services['liip_imagine.filter.loader.crop'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.downscale' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_DownscaleService()
    {
        return $this->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.grayscale' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_GrayscaleService()
    {
        return $this->services['liip_imagine.filter.loader.grayscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.interlace' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_InterlaceService()
    {
        return $this->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.paste' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_PasteService()
    {
        return $this->services['liip_imagine.filter.loader.paste'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($this->get('liip_imagine'), $this->targetDirs[2]);
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.relative_resize' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_RelativeResizeService()
    {
        return $this->services['liip_imagine.filter.loader.relative_resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.resize' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_ResizeService()
    {
        return $this->services['liip_imagine.filter.loader.resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.rotate' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_RotateService()
    {
        return $this->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.scale' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_ScaleService()
    {
        return $this->services['liip_imagine.filter.loader.scale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.strip' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_StripService()
    {
        return $this->services['liip_imagine.filter.loader.strip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.thumbnail' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_ThumbnailService()
    {
        return $this->services['liip_imagine.filter.loader.thumbnail'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.upscale' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_UpscaleService()
    {
        return $this->services['liip_imagine.filter.loader.upscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader();
    }

    /**
     * Gets the public 'liip_imagine.filter.loader.watermark' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader
     */
    protected function getLiipImagine_Filter_Loader_WatermarkService()
    {
        return $this->services['liip_imagine.filter.loader.watermark'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader($this->get('liip_imagine'), $this->targetDirs[2]);
    }

    /**
     * Gets the public 'liip_imagine.filter.manager' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterManager
     */
    protected function getLiipImagine_Filter_ManagerService()
    {
        $this->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager($this->get('liip_imagine.filter.configuration'), $this->get('liip_imagine'), $this->get('liip_imagine.binary.mime_type_guesser'));

        $instance->addLoader('relative_resize', $this->get('liip_imagine.filter.loader.relative_resize'));
        $instance->addLoader('resize', $this->get('liip_imagine.filter.loader.resize'));
        $instance->addLoader('thumbnail', $this->get('liip_imagine.filter.loader.thumbnail'));
        $instance->addLoader('crop', $this->get('liip_imagine.filter.loader.crop'));
        $instance->addLoader('grayscale', $this->get('liip_imagine.filter.loader.grayscale'));
        $instance->addLoader('paste', $this->get('liip_imagine.filter.loader.paste'));
        $instance->addLoader('watermark', $this->get('liip_imagine.filter.loader.watermark'));
        $instance->addLoader('background', $this->get('liip_imagine.filter.loader.background'));
        $instance->addLoader('strip', $this->get('liip_imagine.filter.loader.strip'));
        $instance->addLoader('scale', $this->get('liip_imagine.filter.loader.scale'));
        $instance->addLoader('upscale', $this->get('liip_imagine.filter.loader.upscale'));
        $instance->addLoader('downscale', $this->get('liip_imagine.filter.loader.downscale'));
        $instance->addLoader('auto_rotate', $this->get('liip_imagine.filter.loader.auto_rotate'));
        $instance->addLoader('rotate', $this->get('liip_imagine.filter.loader.rotate'));
        $instance->addLoader('interlace', $this->get('liip_imagine.filter.loader.interlace'));
        $instance->addPostProcessor('jpegoptim', $this->get('liip_imagine.filter.post_processor.jpegoptim'));
        $instance->addPostProcessor('optipng', $this->get('liip_imagine.filter.post_processor.optipng'));
        $instance->addPostProcessor('pngquant', $this->get('liip_imagine.filter.post_processor.pngquant'));
        $instance->addPostProcessor('mozjpeg', $this->get('liip_imagine.filter.post_processor.mozjpeg'));

        return $instance;
    }

    /**
     * Gets the public 'liip_imagine.filter.post_processor.jpegoptim' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor
     */
    protected function getLiipImagine_Filter_PostProcessor_JpegoptimService()
    {
        return $this->services['liip_imagine.filter.post_processor.jpegoptim'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor('/usr/bin/jpegoptim', true, NULL, true, NULL);
    }

    /**
     * Gets the public 'liip_imagine.filter.post_processor.mozjpeg' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor
     */
    protected function getLiipImagine_Filter_PostProcessor_MozjpegService()
    {
        return $this->services['liip_imagine.filter.post_processor.mozjpeg'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor('/opt/mozjpeg/bin/cjpeg');
    }

    /**
     * Gets the public 'liip_imagine.filter.post_processor.optipng' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor
     */
    protected function getLiipImagine_Filter_PostProcessor_OptipngService()
    {
        return $this->services['liip_imagine.filter.post_processor.optipng'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor('/usr/bin/optipng', 7, true, NULL);
    }

    /**
     * Gets the public 'liip_imagine.filter.post_processor.pngquant' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor
     */
    protected function getLiipImagine_Filter_PostProcessor_PngquantService()
    {
        return $this->services['liip_imagine.filter.post_processor.pngquant'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor('/usr/bin/pngquant');
    }

    /**
     * Gets the public 'liip_imagine.form.type.image' shared service.
     *
     * @return \Liip\ImagineBundle\Form\Type\ImageType
     */
    protected function getLiipImagine_Form_Type_ImageService()
    {
        return $this->services['liip_imagine.form.type.image'] = new \Liip\ImagineBundle\Form\Type\ImageType();
    }

    /**
     * Gets the public 'liip_imagine.mime_type_guesser' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface
     */
    protected function getLiipImagine_MimeTypeGuesserService()
    {
        return $this->services['liip_imagine.mime_type_guesser'] = \Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesser::getInstance();
    }

    /**
     * Gets the public 'liip_imagine.templating.helper' shared service.
     *
     * @return \Liip\ImagineBundle\Templating\Helper\ImagineHelper
     */
    protected function getLiipImagine_Templating_HelperService()
    {
        return $this->services['liip_imagine.templating.helper'] = new \Liip\ImagineBundle\Templating\Helper\ImagineHelper($this->get('liip_imagine.cache.manager'));
    }

    /**
     * Gets the public 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'fr', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true, NULL);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.handler.nested' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_NestedService()
    {
        $this->services['monolog.handler.nested'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'\\logs/prod.log'), 100, true, NULL);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.handler.null_internal' shared service.
     *
     * @return \Monolog\Handler\NullHandler
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the public 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.templating' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.translation' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'positibe_unique_views.twig_extension' shared service.
     *
     * @return \Positibe\Bundle\UniqueViewsBundle\Twig\Extension\UniqueViewsExtension
     */
    protected function getPositibeUniqueViews_TwigExtensionService()
    {
        return $this->services['positibe_unique_views.twig_extension'] = new \Positibe\Bundle\UniqueViewsBundle\Twig\Extension\UniqueViewsExtension($this->get('positibe_unique_views.views_counter'));
    }

    /**
     * Gets the public 'positibe_unique_views.views_counter' shared service.
     *
     * @return \Positibe\Bundle\UniqueViewsBundle\Counter\SessionCounter
     */
    protected function getPositibeUniqueViews_ViewsCounterService()
    {
        return $this->services['positibe_unique_views.views_counter'] = new \Positibe\Bundle\UniqueViewsBundle\Counter\SessionCounter($this->get('session'), $this->get('positibe_unique_views.visitable_manager'));
    }

    /**
     * Gets the public 'positibe_unique_views.visitable_manager' shared service.
     *
     * @return \Positibe\Bundle\UniqueViewsBundle\Model\VisitableManager
     */
    protected function getPositibeUniqueViews_VisitableManagerService()
    {
        return $this->services['positibe_unique_views.visitable_manager'] = new \Positibe\Bundle\UniqueViewsBundle\Model\VisitableManager($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the public 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /**
     * Gets the public 'request' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     * @deprecated The "request" service is deprecated since Symfony 2.7 and will be removed in 3.0. Use the "request_stack" service instead.
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[2].'/config/routing.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdDebugProjectContainerUrlMatcher', 'strict_requirements' => NULL), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));

        return $instance;
    }

    /**
     * Gets the public 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('request_stack'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader($c);
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $d);
    }

    /**
     * Gets the public 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the public 'security.context' shared service.
     *
     * @return \Symfony\Component\Security\Core\SecurityContext
     *
     * @deprecated The "security.context" service is deprecated since Symfony 2.6 and will be removed in 3.0.
     */
    protected function getSecurity_ContextService()
    {
        @trigger_error('The "security.context" service is deprecated since Symfony 2.6 and will be removed in 3.0.', E_USER_DEPRECATED);

        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), $this->get('security.csrf.token_storage'), $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'security.encoder_factory' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', 'arguments' => array(0 => 13))));
    }

    /**
     * Gets the public 'security.firewall' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the public 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.token_storage');
        $c = $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('http_kernel');
        $f = $this->get('security.authentication.manager');

        $g = new \Symfony\Component\HttpFoundation\RequestMatcher('/login$');

        $h = new \Symfony\Component\HttpFoundation\RequestMatcher('/register/confirmed');

        $i = new \Symfony\Component\HttpFoundation\RequestMatcher('/search');

        $j = new \Symfony\Component\HttpFoundation\RequestMatcher('^/register/');

        $k = new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting');

        $l = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/');

        $m = new \Symfony\Component\HttpFoundation\RequestMatcher('^/efconnect');

        $n = new \Symfony\Component\HttpFoundation\RequestMatcher('^/elfinder');

        $o = new \Symfony\Component\Security\Http\AccessMap();
        $o->add($g, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $o->add($h, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $o->add($i, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $o->add($j, array(0 => 'ROLE_ADMIN'), NULL);
        $o->add($k, array(0 => 'ROLE_ADMIN'), NULL);
        $o->add($l, array(0 => 'ROLE_ADMIN'), NULL);
        $o->add($m, array(0 => 'ROLE_ADMIN'), NULL);
        $o->add($n, array(0 => 'ROLE_ADMIN'), NULL);

        $p = new \Symfony\Component\Security\Http\HttpUtils($d, $d, '{^https?://%s$}i');

        $q = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($p, array());
        $q->setOptions(array('always_use_default_target_path' => false, 'default_target_path' => '/', 'login_path' => '/login', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $q->setProviderKey('main');

        $r = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $p, array(), $a);
        $r->setOptions(array('login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        $s = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $p, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($p, '/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/logout'));
        $s->addHandler(new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler($this->get('security.csrf.token_storage')));
        $s->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($o, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $this->get('fos_user.user_provider.username_email')), 'main', $a, $c), 2 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $f, $this->get('security.authentication.session_strategy'), $p, 'main', $q, $r, array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $a, $c, $this->get('security.csrf.token_manager')), 3 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '629376cc2e0268.59169157', $a, $f), 4 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $o, $f)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $p, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($e, $p, '/login', false), NULL, NULL, $a, false), $s);
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the public 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the public 'security.secure_random' shared service.
     *
     * @return \Symfony\Component\Security\Core\Util\SecureRandom
     *
     * @deprecated The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.
     */
    protected function getSecurity_SecureRandomService()
    {
        @trigger_error('The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.', E_USER_DEPRECATED);

        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom();
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'security.user_checker.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker
     */
    protected function getSecurity_UserChecker_MainService()
    {
        return $this->services['security.user_checker.main'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the public 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the public 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the public 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.datetime' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the public 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'sensio_framework_extra.view.guesser' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the public 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the public 'service_container' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the public 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the public 'session.storage.filesystem' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the public 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the public 'session.storage.php_bridge' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the public 'session_listener' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the public 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the public 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.plugin.messagelogger' shared service.
     *
     * @return \Swift_Plugins_MessageLogger
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.spool' shared service.
     *
     * @return \Swift_MemorySpool
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport_EsmtpTransport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername('contact@sadjiaceram.com');
        $a->setPassword('sadjiaceram2021');
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('mail.sadjiaceram.com');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        call_user_func(array(new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE)), 'configure'), $instance);

        return $instance;
    }

    /**
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }

    /**
     * Gets the public 'templating.filename_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the public 'templating.helper.assets' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('assets.packages'), array());
    }

    /**
     * Gets the public 'templating.helper.logout_url' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this->get('security.logout_url_generator'));
    }

    /**
     * Gets the public 'templating.helper.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /**
     * Gets the public 'templating.helper.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the public 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the public 'translation.dumper.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.json' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.php' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.po' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.res' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the public 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the public 'translation.extractor.php' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the public 'translation.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the public 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the public 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the public 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the public 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the public 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the public 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the public 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the public 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the public 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the public 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the public 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the public 'translation.writer' shared service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\LoggingTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\LoggingTranslator($this->get('translator.default'), $this->get('monolog.logger.translation'));
    }

    /**
     * Gets the public 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true, 'resource_files' => array('af' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.af.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.af.yml')), 'ar' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ar.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ar.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ar.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ar.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ar.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.ar.xliff')), 'az' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.az.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.az.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.bg.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.bg.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.bg.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.bg.yml')), 'ca' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ca.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ca.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ca.yml')), 'cs' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.cs.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.cs.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.cs.yml')), 'cy' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.da.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.da.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.da.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.da.xliff')), 'de' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.de.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.de.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.de.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.de.xliff')), 'el' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.el.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.el.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.el.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.el.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.el.yml')), 'en' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.en.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.en.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.en.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.en.xliff')), 'es' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.es.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.es.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.es.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.es.xliff')), 'et' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.et.yml')), 'eu' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.eu.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.eu.yml')), 'fa' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fa.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.fa.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.fa.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.fa.xliff')), 'fi' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.fi.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.fi.yml')), 'fr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fr.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.fr.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.fr.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.fr.xliff')), 'gl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.gl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.gl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.gl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.gl.yml')), 'he' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.he.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.he.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.he.yml')), 'hr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hr.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.hr.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.hr.yml')), 'hu' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hu.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.hu.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.hu.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.hu.xliff')), 'hy' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.id.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.id.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.id.xliff')), 'it' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.it.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.it.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.it.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.it.xliff')), 'ja' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ja.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ja.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ja.yml')), 'lb' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lb.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.lb.yml')), 'lt' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lt.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.lt.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.lt.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.lt.xliff')), 'lv' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lv.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.lv.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.lv.yml')), 'mn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.mn.yml')), 'nb' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nb.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nb.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.nb.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.nb.yml')), 'nl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.nl.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.nl.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.nl.xliff')), 'nn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nn.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nn.xlf')), 'no' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.no.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.no.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.pl.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.pl.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.pl.xliff')), 'pt' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.pt.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.pt.yml')), 'pt_BR' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.pt_BR.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.pt_BR.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.pt_BR.xliff')), 'ro' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ro.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ro.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ro.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.ro.xliff')), 'ru' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ru.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ru.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ru.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.ru.xliff')), 'sk' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sk.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sk.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sk.yml')), 'sl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sl.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sl.yml')), 'sq' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sr_Latn.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sr_Latn.yml')), 'sv' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sv.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sv.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sv.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.sv.xliff')), 'th' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.th.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.th.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.th.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.th.yml')), 'tl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.tl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.tl.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.tr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.tr.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.tr.yml')), 'uk' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.uk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.uk.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.uk.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.uk.yml'), 4 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.uk.xliff')), 'vi' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.vi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.vi.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.vi.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.vi.yml')), 'zh_CN' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.zh_CN.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.zh_CN.yml')), 'zh_TW' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_TW.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ua.xlf')), 'bn' => array(0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.bn.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.bn.yml')), 'bn_BD' => array(0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.bn_BD.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.bn_BD.yml')), 'eo' => array(0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.eo.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.eo.yml')), 'ky' => array(0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ky.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ky.yml'), 2 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.ky.xliff')), 'sw' => array(0 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.sw.xliff')))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'fr'));

        return $instance;
    }

    /**
     * Gets the public 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('request_stack');
        $c = $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('fragment.handler');

        $e = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b, $c);

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('prod');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($b);
        }
        $f->setContainer($this);

        $this->services['twig'] = $instance = new \Twig\Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->get('security.logout_url_generator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension($this->get('twig.profile'), $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages'), $e));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($d));
        $instance->addExtension($e);
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig', 1 => '@FMElfinder/Form/elfinder_widget.html.twig', 2 => '@IvoryCKEditor/Form/ckeditor_widget.html.twig', 3 => 'form_div_layout.html.twig', 4 => 'LiipImagineBundle:Form:form_div_layout.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($this->get('ivory_ck_editor.twig_extension'));
        $instance->addExtension($this->get('twig.extension.fm_elfinder_init'));
        $instance->addExtension($this->get('knp_paginator.twig.extension.pagination'));
        $instance->addExtension(new \Liip\ImagineBundle\Templating\ImagineExtension($this->get('liip_imagine.cache.manager')));
        $instance->addExtension($this->get('ivory.google_map.twig.extension.api'));
        $instance->addExtension($this->get('ivory.google_map.twig.extension.map'));
        $instance->addExtension($this->get('ivory.google_map.twig.extension.map.static'));
        $instance->addExtension($this->get('ivory.google_map.twig.extension.place_autocomplete'));
        $instance->addExtension(new \Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension());
        $instance->addExtension($this->get('positibe_unique_views.twig_extension'));
        $instance->addGlobal('app', $f);
        call_user_func(array(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','), 'configure'), $instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the public 'twig.exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE), true);
    }

    /**
     * Gets the public 'twig.extension.fm_elfinder_init' shared service.
     *
     * @return \FM\ElfinderBundle\Twig\Extension\FMElfinderExtension
     */
    protected function getTwig_Extension_FmElfinderInitService()
    {
        return $this->services['twig.extension.fm_elfinder_init'] = new \FM\ElfinderBundle\Twig\Extension\FMElfinderExtension($this->get('twig'));
    }

    /**
     * Gets the public 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'\\src\\Cosanit\\CosanitBundle/Resources/views'), 'Cosanit');
        $instance->addPath(($this->targetDirs[2].'/Resources/FOSUserBundle/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\egeloen\\ckeditor-bundle/Resources/views'), 'IvoryCKEditor');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\helios-ag\\fm-elfinder-bundle\\src/Resources/views'), 'FMElfinder');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/views'), 'KnpPaginator');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\liip\\imagine-bundle/Resources/views'), 'LiipImagine');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\egeloen\\google-map-bundle/Resources/views'), 'IvoryGoogleMap');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\php-http\\httplug-bundle/Resources/views'), 'Httplug');
        $instance->addPath(($this->targetDirs[2].'/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the public 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the public 'twig.translation.extractor' shared service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the public 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('dae049ea70d7f5c500f96eb2ddfghjg2h3j1d7ad40499d508');
    }

    /**
     * Gets the public 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the public 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine.orm.validator.unique')));
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('fos_user.util.canonical_fields_updater'))));
        $instance->addXmlMapping(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\DependencyInjection\\Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /**
     * Gets the public 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the public 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'));
    }

    /**
     * Gets the private 'fos_user.user_provider.username_email' shared service.
     *
     * @return \FOS\UserBundle\Security\EmailUserProvider
     */
    protected function getFosUser_UserProvider_UsernameEmailService()
    {
        return $this->services['fos_user.user_provider.username_email'] = new \FOS\UserBundle\Security\EmailUserProvider($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the private 'fos_user.util.canonical_fields_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /**
     * Gets the private 'fos_user.util.password_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\PasswordUpdater
     */
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        return $this->services['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater($this->get('security.encoder_factory'));
    }

    /**
     * Gets the private 'httplug.collector.collector' shared service.
     *
     * @return \Http\HttplugBundle\Collector\Collector
     */
    protected function getHttplug_Collector_CollectorService()
    {
        return $this->services['httplug.collector.collector'] = new \Http\HttplugBundle\Collector\Collector();
    }

    /**
     * Gets the private 'httplug.collector.formatter' shared service.
     *
     * @return \Http\HttplugBundle\Collector\Formatter
     */
    protected function getHttplug_Collector_FormatterService()
    {
        return $this->services['httplug.collector.formatter'] = new \Http\HttplugBundle\Collector\Formatter(new \Http\Message\Formatter\FullHttpMessageFormatter(0), new \Http\Message\Formatter\CurlCommandFormatter());
    }

    /**
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.authentication.trust_resolver');
        $b = $this->get('security.role_hierarchy');

        $this->services['security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'affirmative', false, true);

        $instance->setVoters(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($b), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $a, $b)));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('fos_user.user_provider.username_email'), $this->get('security.user_checker.main'), 'main', $this->get('security.encoder_factory'), true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('629376cc2e0268.59169157')), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.session_strategy' shared service.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        return $this->services['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session'));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_CO_ADMIN'), 'ROLE_USER' => array(0 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN')));
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the private 'swiftmailer.mailer.default.transport.eventdispatcher' shared service.
     *
     * @return \Swift_Events_SimpleEventDispatcher
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'prod',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'\\logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'CosanitBundle' => 'Cosanit\\CosanitBundle\\CosanitBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle',
                'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'IvoryGoogleMapBundle' => 'Ivory\\GoogleMapBundle\\IvoryGoogleMapBundle',
                'HttplugBundle' => 'Http\\HttplugBundle\\HttplugBundle',
                'IvorySerializerBundle' => 'Ivory\\SerializerBundle\\IvorySerializerBundle',
                'PositibeUniqueViewsBundle' => 'Positibe\\Bundle\\UniqueViewsBundle\\PositibeUniqueViewsBundle',
            ),
            'kernel.bundles_metadata' => array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'CosanitBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\Cosanit\\CosanitBundle'),
                    'namespace' => 'Cosanit\\CosanitBundle',
                ),
                'FOSUserBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ),
                'IvoryCKEditorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\egeloen\\ckeditor-bundle'),
                    'namespace' => 'Ivory\\CKEditorBundle',
                ),
                'FMElfinderBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\helios-ag\\fm-elfinder-bundle\\src'),
                    'namespace' => 'FM\\ElfinderBundle',
                ),
                'KnpPaginatorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle'),
                    'namespace' => 'Knp\\Bundle\\PaginatorBundle',
                ),
                'StofDoctrineExtensionsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\stof\\doctrine-extensions-bundle'),
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ),
                'LiipImagineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\liip\\imagine-bundle'),
                    'namespace' => 'Liip\\ImagineBundle',
                ),
                'IvoryGoogleMapBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\egeloen\\google-map-bundle'),
                    'namespace' => 'Ivory\\GoogleMapBundle',
                ),
                'HttplugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\php-http\\httplug-bundle'),
                    'namespace' => 'Http\\HttplugBundle',
                ),
                'IvorySerializerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\egeloen\\serializer-bundle'),
                    'namespace' => 'Ivory\\SerializerBundle',
                ),
                'PositibeUniqueViewsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\positibe\\unique-views-bundle'),
                    'namespace' => 'Positibe\\Bundle\\UniqueViewsBundle',
                ),
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdDebugProjectContainer',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'creativweb',
            'database_user' => 'root',
            'database_password' => NULL,
            'mailer_transport' => 'smtp',
            'mailer_host' => 'mail.sadjiaceram.com',
            'mailer_user' => 'contact@sadjiaceram.com',
            'mailer_password' => 'sadjiaceram2021',
            'secret' => 'dae049ea70d7f5c500f96eb2ddfghjg2h3j1d7ad40499d508',
            'locale' => 'fr',
            'brochures_directory' => ($this->targetDirs[2].'/../web/photos_produits'),
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'kernel.secret' => 'dae049ea70d7f5c500f96eb2ddfghjg2h3j1d7ad40499d508',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'fr',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => '2.5-bc',
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'translator.logging' => true,
            'data_collector.templates' => array(

            ),
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appProdDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appProdDebugProjectContainerUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => ($this->targetDirs[2].'/config/routing.yml'),
            'router.cache_class_prefix' => 'appProdDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => -1,
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.container.dump' => (__DIR__.'/appProdDebugProjectContainer.xml'),
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_CO_ADMIN',
                ),
                'ROLE_USER' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                ),
            ),
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bridge\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.class' => 'Twig\\Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig\\Loader\\ChainLoader',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig',
                1 => '@FMElfinder/Form/elfinder_widget.html.twig',
                2 => '@IvoryCKEditor/Form/ckeditor_widget.html.twig',
                3 => 'form_div_layout.html.twig',
                4 => 'LiipImagineBundle:Form:form_div_layout.html.twig',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.deduplication.class' => 'Monolog\\Handler\\DeduplicationHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => 'mail.sadjiaceram.com',
            'swiftmailer.mailer.default.transport.smtp.username' => 'contact@sadjiaceram.com',
            'swiftmailer.mailer.default.transport.smtp.password' => 'sadjiaceram2021',
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.registration.confirmation.from_email' => array(
                'contact@sadjiaceram.com' => 'SADJIACERAM.com',
            ),
            'fos_user.resetting.email.from_email' => array(
                'contact@sadjiaceram.com' => 'SADJIACERAM.com',
            ),
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Cosanit\\CosanitBundle\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'fm_elfinder.loader' => 'FM\\ElfinderBundle\\Loader\\ElFinderLoader',
            'fm_elfinder.configurator' => 'FM\\ElfinderBundle\\Configuration\\ElFinderConfigurationReader',
            'elfinder.form.type.class' => 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType',
            'fm_elfinder' => array(
                'instances' => array(
                    'default' => array(
                        'relative_path' => false,
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'connector' => array(
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '2M',
                                    'volume_id' => 0,
                                    'autoload' => false,
                                    'phash' => '',
                                    'trash_hash' => '',
                                    'locale' => '',
                                    'i18n_folder_name' => false,
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'security_voter' => '',
                                    'start_path' => '',
                                    'encoding' => 'UTF-8',
                                    'url' => '',
                                    'alias' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'fileMode' => 420,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(

                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(

                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => 1,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(

                                    ),
                                    'archivers' => array(
                                        'enabled' => false,
                                        'create' => array(

                                        ),
                                        'extract' => array(

                                        ),
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'filesystem' => '',
                                        'type' => '',
                                        'adapter_service' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(

                                    ),
                                    'driver_options' => array(

                                    ),
                                    'dropbox2_settings' => array(
                                        'enabled' => false,
                                        'aliasFormat' => '%s@Dropbox',
                                        'path' => '/',
                                        'separator' => '/',
                                        'acceptedName' => '%s@Dropbox',
                                        'rootCssClass' => 'elfinder-navbar-root-dropbox',
                                        'getThumbSize' => 'medium',
                                    ),
                                    'box_settings' => array(
                                        'enabled' => false,
                                        'root' => 'Box.com',
                                        'path' => '/',
                                        'separator' => '/',
                                        'tmbPath' => '',
                                        'tmbURL' => '',
                                        'tmpPath' => '',
                                        'acceptedName' => '#^[^/\\?*:|"<>]*[^./\\?*:|"<>]$#',
                                        'rootCssClass' => 'elfinder-navbar-root-box',
                                    ),
                                    'onedrive_settings' => array(
                                        'enabled' => false,
                                        'root' => 'OneDrive.com',
                                        'OneDriveApiClient' => '',
                                        'path' => '/',
                                        'separator' => '/',
                                        'tmbPath' => '',
                                        'tmbURL' => '',
                                        'tmpPath' => '',
                                        'acceptedName' => '#^[^/\\?*:|"<>]*[^./\\?*:|"<>]$#',
                                        'rootCssClass' => 'elfinder-navbar-root-onedrive',
                                        'useApiThumbnail' => true,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'mysql_settings' => array(
                                        'enabled' => false,
                                        'port' => NULL,
                                        'socket' => NULL,
                                        'files_table' => 'elfinder_file',
                                        'tmbPath' => '',
                                        'tmpPath' => '',
                                        'rootCssClass' => 'elfinder-navbar-root-sql',
                                        'noSessionCache' => 'hasdirs',
                                    ),
                                ),
                            ),
                            'debug' => false,
                            'binds' => array(

                            ),
                            'plugins' => array(

                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'fullscreen' => true,
                        'theme' => 'smoothness',
                        'include_assets' => true,
                        'tinymce_popup_path' => '',
                        'path_prefix' => '/',
                        'visible_mime_types' => array(

                        ),
                    ),
                ),
                'configuration_provider' => 'fm_elfinder.configurator.default',
                'assets_path' => 'assets',
                'loader' => 'fm_elfinder.loader.default',
            ),
            'knp_paginator.class' => 'Knp\\Component\\Pager\\Paginator',
            'knp_paginator.helper.processor.class' => 'Knp\\Bundle\\PaginatorBundle\\Helper\\Processor',
            'knp_paginator.template.pagination' => 'KnpPaginatorBundle:Pagination:sliding.html.twig',
            'knp_paginator.template.filtration' => '@KnpPaginator/Pagination/filtration.html.twig',
            'knp_paginator.template.sortable' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.default_locale' => 'en',
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'liip_imagine.filter.configuration.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterConfiguration',
            'liip_imagine.filter.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterManager',
            'liip_imagine.data.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\DataManager',
            'liip_imagine.cache.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\CacheManager',
            'liip_imagine.cache.signer.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Signer',
            'liip_imagine.binary.mime_type_guesser.class' => 'Liip\\ImagineBundle\\Binary\\SimpleMimeTypeGuesser',
            'liip_imagine.controller.class' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'liip_imagine.twig.extension.class' => 'Liip\\ImagineBundle\\Templating\\ImagineExtension',
            'liip_imagine.templating.helper.class' => 'Liip\\ImagineBundle\\Templating\\Helper\\ImagineHelper',
            'liip_imagine.gd.class' => 'Imagine\\Gd\\Imagine',
            'liip_imagine.imagick.class' => 'Imagine\\Imagick\\Imagine',
            'liip_imagine.gmagick.class' => 'Imagine\\Gmagick\\Imagine',
            'liip_imagine.filter.loader.relative_resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RelativeResizeFilterLoader',
            'liip_imagine.filter.loader.resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ResizeFilterLoader',
            'liip_imagine.filter.loader.thumbnail.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ThumbnailFilterLoader',
            'liip_imagine.filter.loader.crop.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\CropFilterLoader',
            'liip_imagine.filter.loader.grayscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\GrayscaleFilterLoader',
            'liip_imagine.filter.loader.paste.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\PasteFilterLoader',
            'liip_imagine.filter.loader.watermark.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\WatermarkFilterLoader',
            'liip_imagine.filter.loader.strip.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\StripFilterLoader',
            'liip_imagine.filter.loader.background.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\BackgroundFilterLoader',
            'liip_imagine.filter.loader.scale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ScaleFilterLoader',
            'liip_imagine.filter.loader.upscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\UpscaleFilterLoader',
            'liip_imagine.filter.loader.downscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\DownscaleFilterLoader',
            'liip_imagine.filter.loader.auto_rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\AutoRotateFilterLoader',
            'liip_imagine.filter.loader.rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RotateFilterLoader',
            'liip_imagine.filter.loader.interlace.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\InterlaceFilterLoader',
            'liip_imagine.binary.loader.filesystem.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\FileSystemLoader',
            'liip_imagine.binary.loader.stream.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\StreamLoader',
            'liip_imagine.binary.loader.flysystem.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\FlysystemLoader',
            'liip_imagine.binary.locator.filesystem.class' => 'Liip\\ImagineBundle\\Binary\\Locator\\FileSystemLocator',
            'liip_imagine.binary.locator.filesystem_insecure.class' => 'Liip\\ImagineBundle\\Binary\\Locator\\FileSystemInsecureLocator',
            'liip_imagine.cache.resolver.web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\WebPathResolver',
            'liip_imagine.cache.resolver.no_cache_web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\NoCacheWebPathResolver',
            'liip_imagine.cache.resolver.aws_s3.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\AwsS3Resolver',
            'liip_imagine.cache.resolver.cache.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\CacheResolver',
            'liip_imagine.cache.resolver.flysystem.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\FlysystemResolver',
            'liip_imagine.cache.resolver.proxy.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\ProxyResolver',
            'liip_imagine.form.type.image.class' => 'Liip\\ImagineBundle\\Form\\Type\\ImageType',
            'liip_imagine.meta_data.reader.class' => 'Imagine\\Image\\Metadata\\ExifMetadataReader',
            'liip_imagine.filter.post_processor.jpegoptim.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\JpegOptimPostProcessor',
            'liip_imagine.jpegoptim.binary' => '/usr/bin/jpegoptim',
            'liip_imagine.jpegoptim.stripall' => true,
            'liip_imagine.jpegoptim.max' => NULL,
            'liip_imagine.jpegoptim.progressive' => true,
            'liip_imagine.jpegoptim.tempdir' => NULL,
            'liip_imagine.filter.post_processor.optipng.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\OptiPngPostProcessor',
            'liip_imagine.optipng.binary' => '/usr/bin/optipng',
            'liip_imagine.optipng.level' => 7,
            'liip_imagine.optipng.stripall' => true,
            'liip_imagine.optipng.tempdir' => NULL,
            'liip_imagine.filter.post_processor.pngquant.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\PngquantPostProcessor',
            'liip_imagine.pngquant.binary' => '/usr/bin/pngquant',
            'liip_imagine.filter.post_processor.mozjpeg.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\MozJpegPostProcessor',
            'liip_imagine.mozjpeg.binary' => '/opt/mozjpeg/bin/cjpeg',
            'liip_imagine.cache.resolver.default' => 'default',
            'liip_imagine.default_image' => NULL,
            'liip_imagine.filter_sets' => array(
                'cache' => array(
                    'quality' => 100,
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'filters' => array(

                    ),
                    'post_processors' => array(

                    ),
                ),
                'my_thumb' => array(
                    'quality' => 75,
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 770,
                                1 => 332,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'article' => array(
                    'quality' => 75,
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 370,
                                1 => 267,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'logo' => array(
                    'quality' => 75,
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 270,
                                1 => 145,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
            ),
            'liip_imagine.binary.loader.default' => 'default',
            'liip_imagine.controller.filter_action' => 'liip_imagine.controller:filterAction',
            'liip_imagine.controller.filter_runtime_action' => 'liip_imagine.controller:filterRuntimeAction',
            'console.command.ids' => array(
                0 => 'doctrine_cache.contains_command',
                1 => 'doctrine_cache.delete_command',
                2 => 'doctrine_cache.flush_command',
                3 => 'doctrine_cache.stats_command',
                4 => 'doctrine.database_create_command',
                5 => 'doctrine.database_drop_command',
                6 => 'doctrine.generate_entities_command',
                7 => 'doctrine.mapping_import_command',
                8 => 'doctrine.cache_clear_metadata_command',
                9 => 'doctrine.cache_clear_query_cache_command',
                10 => 'doctrine.cache_clear_result_command',
                11 => 'doctrine.cache_collection_region_command',
                12 => 'doctrine.mapping_convert_command',
                13 => 'doctrine.schema_create_command',
                14 => 'doctrine.schema_drop_command',
                15 => 'doctrine.ensure_production_settings_command',
                16 => 'doctrine.clear_entity_region_command',
                17 => 'doctrine.database_import_command',
                18 => 'doctrine.mapping_info_command',
                19 => 'doctrine.clear_query_region_command',
                20 => 'doctrine.query_dql_command',
                21 => 'doctrine.query_sql_command',
                22 => 'doctrine.schema_update_command',
                23 => 'doctrine.schema_validate_command',
                24 => 'fos_user.command.activate_user',
                25 => 'fos_user.command.change_password',
                26 => 'fos_user.command.create_user',
                27 => 'fos_user.command.deactivate_user',
                28 => 'fos_user.command.demote_user',
                29 => 'fos_user.command.promote_user',
                30 => 'ivory_ck_editor.command.installer',
            ),
        );
    }
}
