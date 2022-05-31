<?php

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_c7c33a81530c35688ae8b84e339678dfdbc605524950fa6e8cd39acac29a8508 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    <h2>Event Dispatcher</h2>

    ";
        // line 15
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "calledlisteners", array()))) {
            // line 16
            echo "        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
            // line 22
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "calledlisteners", array())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 25
            echo $context["helper"]->macro_render_table(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "calledlisteners", array()));
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "notcalledlisteners", array())), "html", null, true);
            echo "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 32
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "notcalledlisteners", array()))) {
                // line 33
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 44
                echo "                        ";
                echo $context["helper"]->macro_render_table(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "notcalledlisteners", array()));
                echo "
                    ";
            }
            // line 46
            echo "                </div>
            </div>
        </div>
    ";
        }
    }

    // line 52
    public function macro_render_table($__listeners__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 61
            $context["previous_event"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["listeners"] ?? null)), "event", array());
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listeners"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 63
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", array()) || (twig_get_attribute($this->env, $this->source, $context["listener"], "event", array()) != ($context["previous_event"] ?? null)))) {
                    // line 64
                    echo "                ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                        // line 65
                        echo "                    </tbody>
                ";
                    }
                    // line 67
                    echo "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "event", array()), "html", null, true);
                    echo "</th>
                    </tr>

                ";
                    // line 73
                    $context["previous_event"] = twig_get_attribute($this->env, $this->source, $context["listener"], "event", array());
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "
            <tr>
                <td class=\"text-right nowrap\">";
                // line 77
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["listener"], "priority", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["listener"], "priority", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">
                    ";
                // line 79
                if ((twig_get_attribute($this->env, $this->source, $context["listener"], "type", array()) == "Closure")) {
                    // line 80
                    echo "
                        Closure
                        <span class=\"text-muted text-small\">(there is no class or file information)</span>

                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 84
$context["listener"], "type", array()) == "Function")) {
                    // line 85
                    echo "
                        ";
                    // line 86
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["listener"], "file", array()), twig_get_attribute($this->env, $this->source, $context["listener"], "line", array()));
                    // line 87
                    echo "                        ";
                    if (($context["link"] ?? null)) {
                        // line 88
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "function", array()), "html", null, true);
                        echo "()</a>
                            <span class=\"text-muted text-small\">(";
                        // line 89
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "file", array()), "html", null, true);
                        echo ")</span>
                        ";
                    } else {
                        // line 91
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "function", array()), "html", null, true);
                        echo "()
                            <span class=\"text-muted newline text-small\">";
                        // line 92
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "file", array()), "html", null, true);
                        echo " (line ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "line", array()), "html", null, true);
                        echo ")</span>
                        ";
                    }
                    // line 94
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 95
$context["listener"], "type", array()) == "Method")) {
                    // line 96
                    echo "
                        ";
                    // line 97
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["listener"], "file", array()), twig_get_attribute($this->env, $this->source, $context["listener"], "line", array()));
                    // line 98
                    echo "                        ";
                    $context["class_namespace"] = twig_join_filter(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "class", array()), "\\",  -1), "\\");
                    // line 99
                    echo "
                        ";
                    // line 100
                    if (($context["link"] ?? null)) {
                        // line 101
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"><strong>";
                        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, $context["listener"], "class", array()))), "html", null, true);
                        echo "</strong>::";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "method", array()), "html", null, true);
                        echo "()</a>
                            <span class=\"text-muted text-small\">(";
                        // line 102
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "class", array()), "html", null, true);
                        echo ")</span>
                        ";
                    } else {
                        // line 104
                        echo "                            <span>";
                        echo twig_escape_filter($this->env, ($context["class_namespace"] ?? null), "html", null, true);
                        echo "\\</span><strong>";
                        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, $context["listener"], "class", array()))), "html", null, true);
                        echo "</strong>::";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "method", array()), "html", null, true);
                        echo "()
                            <span class=\"text-muted newline text-small\">";
                        // line 105
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "file", array()), "html", null, true);
                        echo " (line ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listener"], "line", array()), "html", null, true);
                        echo ")</span>
                        ";
                    }
                    // line 107
                    echo "
                    ";
                }
                // line 109
                echo "                </td>
            </tr>

            ";
                // line 112
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    // line 113
                    echo "                </tbody>
            ";
                }
                // line 115
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "    </table>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 116,  299 => 115,  295 => 113,  293 => 112,  288 => 109,  284 => 107,  277 => 105,  268 => 104,  263 => 102,  254 => 101,  252 => 100,  249 => 99,  246 => 98,  244 => 97,  241 => 96,  239 => 95,  236 => 94,  229 => 92,  224 => 91,  219 => 89,  212 => 88,  209 => 87,  207 => 86,  204 => 85,  202 => 84,  196 => 80,  194 => 79,  189 => 77,  185 => 75,  182 => 74,  180 => 73,  174 => 70,  169 => 67,  165 => 65,  162 => 64,  159 => 63,  141 => 62,  139 => 61,  129 => 53,  117 => 52,  109 => 46,  103 => 44,  90 => 33,  88 => 32,  83 => 30,  75 => 25,  69 => 22,  65 => 20,  59 => 16,  57 => 15,  53 => 13,  50 => 12,  42 => 7,  39 => 6,  36 => 5,  32 => 1,  30 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/events.html.twig", "D:\\xampp\\htdocs\\CREATIV\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\events.html.twig");
    }
}
