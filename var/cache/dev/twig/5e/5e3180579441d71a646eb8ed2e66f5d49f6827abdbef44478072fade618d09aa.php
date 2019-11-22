<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_eb78b6aa39c8557a6ba0fac4e011bcec584f66e01241ecdf46d83c0ad2225b47 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'panelContent' => [$this, 'block_panelContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 5
        $context["classnames"] = ["default" => "timeline-category-default", "section" => "timeline-category-section", "event_listener" => "timeline-category-event-listener", "template" => "timeline-category-template", "doctrine" => "timeline-category-doctrine", "messenger.middleware" => "timeline-category-messenger-middleware", "controller.argument_value_resolver" => "timeline-category-controller-argument-value-resolver"];
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/time.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 16
        echo "    ";
        $context["has_time_events"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 16)) > 0);
        // line 17
        echo "    ";
        $context["total_time"] = ((($context["has_time_events"] ?? null)) ? (sprintf("%.0f", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 17))) : ("n/a"));
        // line 18
        echo "    ";
        $context["initialization_time"] = ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 18))) ? (sprintf("%.0f", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inittime", [], "any", false, false, false, 18))) : ("n/a"));
        // line 19
        echo "    ";
        $context["status_color"] = (((($context["has_time_events"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 19) > 1000))) ? ("yellow") : (""));
        // line 20
        echo "
    ";
        // line 21
        ob_start(function () { return ''; });
        // line 22
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 23
        echo twig_escape_filter($this->env, ($context["total_time"] ?? null), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        echo "
    ";
        // line 27
        ob_start(function () { return ''; });
        // line 28
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 30
        echo twig_escape_filter($this->env, ($context["total_time"] ?? null), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>";
        // line 34
        echo twig_escape_filter($this->env, ($context["initialization_time"] ?? null), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo "
    ";
        // line 38
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 42
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 43
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "</span>
        <strong>Performance</strong>
    </span>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 49
        echo "    ";
        $context["has_time_events"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 49)) > 0);
        // line 50
        echo "    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 54
        echo twig_escape_filter($this->env, sprintf("%.0f", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 54)), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 59
        echo twig_escape_filter($this->env, sprintf("%.0f", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inittime", [], "any", false, false, false, 59)), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, false, false, 63), "memory", [], "any", false, false, false, 63)) {
            // line 64
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 65
            echo twig_escape_filter($this->env, sprintf("%.2f", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, false, false, 65), "memory", [], "any", false, false, false, 65), "memory", [], "any", false, false, false, 65) / 1024) / 1024)), "html", null, true);
            echo " <span class=\"unit\">MB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        ";
        }
        // line 69
        echo "
        ";
        // line 70
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 70)) > 0)) {
            // line 71
            echo "            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 74
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 74)), "html", null, true);
            echo "</span>
                <span class=\"label\">Sub-Request";
            // line 75
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 75)) > 1)) ? ("s") : (""));
            echo "</span>
            </div>

            ";
            // line 78
            if (($context["has_time_events"] ?? null)) {
                // line 79
                echo "                ";
                $context["subrequests_time"] = 0;
                // line 80
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 80));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 81
                    echo "                    ";
                    $context["subrequests_time"] = (($context["subrequests_time"] ?? null) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "time"], "method", false, false, false, 81), "events", [], "any", false, false, false, 81), "__section__", [], "any", false, false, false, 81), "duration", [], "any", false, false, false, 81));
                    // line 82
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "            ";
            } else {
                // line 84
                echo "                ";
                $context["subrequests_time"] = "n/a";
                // line 85
                echo "            ";
            }
            // line 86
            echo "
            <div class=\"metric\">
                <span class=\"value\">";
            // line 88
            echo twig_escape_filter($this->env, ($context["subrequests_time"] ?? null), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request";
            // line 89
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 89)) > 1)) ? ("s") : (""));
            echo " time</span>
            </div>
        ";
        }
        // line 92
        echo "    </div>

    <h2>Execution timeline</h2>

    ";
        // line 96
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isStopwatchInstalled", [], "method", false, false, false, 96)) {
            // line 97
            echo "        <div class=\"empty\">
            <p>The Stopwatch component is not installed. If you want to see timing events, run: <code>composer require symfony/stopwatch</code>.</p>
        </div>
    ";
        } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 100
($context["collector"] ?? null), "events", [], "any", false, false, false, 100))) {
            // line 101
            echo "        <div class=\"empty\">
            <p>No timing events have been recorded. Check that symfony/stopwatch is installed and debugging enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 105
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_panelContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panelContent"));

        // line 110
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" name=\"threshold\" id=\"threshold\" value=\"1\" min=\"0\" placeholder=\"1.1\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 117)) {
            // line 118
            echo "        <h3 class=\"dump-inline\">
            Sub-Request ";
            // line 119
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getcollector", [0 => "request"], "method", false, false, false, 119), "requestattributes", [], "any", false, false, false, 119), "get", [0 => "_controller"], "method", false, false, false, 119));
            echo "
            <small>
                ";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 121), "__section__", [], "any", false, false, false, 121), "duration", [], "any", false, false, false, 121), "html", null, true);
            echo " ms
                <a class=\"newline\" href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 122), "token", [], "any", false, false, false, 122), "panel" => "time"]), "html", null, true);
            echo "\">Return to parent request</a>
            </small>
        </h3>
    ";
        } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 125
($context["profile"] ?? null), "children", [], "any", false, false, false, 125)) > 0)) {
            // line 126
            echo "        <h3>
            Main Request <small>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 127), "__section__", [], "any", false, false, false, 127), "duration", [], "any", false, false, false, 127), "html", null, true);
            echo " ms</small>
        </h3>
    ";
        }
        // line 130
        echo "
    ";
        // line 131
        echo twig_call_macro($macros["helper"], "macro_display_timeline", [($context["token"] ?? null), ($context["classnames"] ?? null), twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 131), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 131), "__section__", [], "any", false, false, false, 131), "origin", [], "any", false, false, false, 131)], 131, $context, $this->getSourceContext());
        echo "

    ";
        // line 133
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 133))) {
            // line 134
            echo "        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>(";
            // line 136
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 136)), "html", null, true);
            echo ")</small></h3>

        ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 138));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 139
                echo "            ";
                $context["events"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "time"], "method", false, false, false, 139), "events", [], "any", false, false, false, 139);
                // line 140
                echo "            <h4>
                <a href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 141), "panel" => "time"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "request"], "method", false, false, false, 141), "identifier", [], "any", false, false, false, 141), "html", null, true);
                echo "</a>
                <small>";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, false, 142), "duration", [], "any", false, false, false, 142), "html", null, true);
                echo " ms</small>
            </h4>

            ";
                // line 145
                echo twig_call_macro($macros["helper"], "macro_display_timeline", [twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 145), ($context["classnames"] ?? null), ($context["events"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 145), "__section__", [], "any", false, false, false, 145), "origin", [], "any", false, false, false, 145)], 145, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "    ";
        }
        // line 148
        echo "
<svg id=\"timeline-template\" width=\"0\" height=\"0\">
  <defs>
    <pattern id=\"subrequest\" class=\"timeline-subrequest-pattern\" patternUnits=\"userSpaceOnUse\" width=\"20\" height=\"20\" viewBox=\"0 0 40 40\">
        <path d=\"M0 40L40 0H20L0 20M40 40V20L20 40\"/>
    </pattern>
  </defs>
</svg>
<style type=\"text/css\">
";
        // line 157
        $this->loadTemplate("@WebProfiler/Collector/time.css.twig", "@WebProfiler/Collector/time.html.twig", 157)->display(twig_array_merge($context, ($context["classnames"] ?? null)));
        // line 158
        echo "</style>
<script>
";
        // line 160
        $this->loadTemplate("@WebProfiler/Collector/time.js", "@WebProfiler/Collector/time.html.twig", 160)->display($context);
        // line 161
        echo "</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 164
    public function macro_dump_request_data($__token__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "token" => $__token__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 166
            $macros["__internal_3207d4862da90858662fbc79ab60c34f5964a912879f3874a7dc644187535ad6"] = $this;
            // line 167
            echo "{
    id: \"";
            // line 168
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "js", null, true);
            echo "\",
    left: ";
            // line 169
            echo twig_escape_filter($this->env, sprintf("%F", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, false, 169), "origin", [], "any", false, false, false, 169) - ($context["origin"] ?? null))), "js", null, true);
            echo ",
    end: \"";
            // line 170
            echo twig_escape_filter($this->env, sprintf("%F", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, false, 170), "endtime", [], "any", false, false, false, 170)), "js", null, true);
            echo "\",
    events: [ ";
            // line 171
            echo twig_call_macro($macros["__internal_3207d4862da90858662fbc79ab60c34f5964a912879f3874a7dc644187535ad6"], "macro_dump_events", [($context["events"] ?? null)], 171, $context, $this->getSourceContext());
            echo " ],
}
";
            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 176
    public function macro_dump_events($__events__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "events" => $__events__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_events"));

            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 179
                if (("__section__" != $context["name"])) {
                    // line 180
                    echo "{
    name: \"";
                    // line 181
                    echo twig_escape_filter($this->env, $context["name"], "js", null, true);
                    echo "\",
    category: \"";
                    // line 182
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "category", [], "any", false, false, false, 182), "js", null, true);
                    echo "\",
    origin: ";
                    // line 183
                    echo twig_escape_filter($this->env, sprintf("%F", twig_get_attribute($this->env, $this->source, $context["event"], "origin", [], "any", false, false, false, 183)), "js", null, true);
                    echo ",
    starttime: ";
                    // line 184
                    echo twig_escape_filter($this->env, sprintf("%F", twig_get_attribute($this->env, $this->source, $context["event"], "starttime", [], "any", false, false, false, 184)), "js", null, true);
                    echo ",
    endtime: ";
                    // line 185
                    echo twig_escape_filter($this->env, sprintf("%F", twig_get_attribute($this->env, $this->source, $context["event"], "endtime", [], "any", false, false, false, 185)), "js", null, true);
                    echo ",
    duration: ";
                    // line 186
                    echo twig_escape_filter($this->env, sprintf("%F", twig_get_attribute($this->env, $this->source, $context["event"], "duration", [], "any", false, false, false, 186)), "js", null, true);
                    echo ",
    memory: ";
                    // line 187
                    echo twig_escape_filter($this->env, sprintf("%.1F", ((twig_get_attribute($this->env, $this->source, $context["event"], "memory", [], "any", false, false, false, 187) / 1024) / 1024)), "js", null, true);
                    echo ",
    elements: {},
    periods: [";
                    // line 190
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["event"], "periods", [], "any", false, false, false, 190));
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 191
                        echo "{
            start: ";
                        // line 192
                        echo twig_escape_filter($this->env, sprintf("%F", twig_get_attribute($this->env, $this->source, $context["period"], "starttime", [], "any", false, false, false, 192)), "js", null, true);
                        echo ",
            end: ";
                        // line 193
                        echo twig_escape_filter($this->env, sprintf("%F", twig_get_attribute($this->env, $this->source, $context["period"], "endtime", [], "any", false, false, false, 193)), "js", null, true);
                        echo ",
            duration: ";
                        // line 194
                        echo twig_escape_filter($this->env, sprintf("%F", twig_get_attribute($this->env, $this->source, $context["period"], "duration", [], "any", false, false, false, 194)), "js", null, true);
                        echo ",
            elements: {}
        },";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 198
                    echo "],
},
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 205
    public function macro_display_timeline($__token__ = null, $__classnames__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "token" => $__token__,
            "classnames" => $__classnames__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "display_timeline"));

            // line 206
            $macros["helper"] = $this;
            // line 207
            echo "    <div class=\"sf-profiler-timeline\">
        <div id=\"legend-";
            // line 208
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "\" class=\"legends\"></div>
        <svg id=\"timeline-";
            // line 209
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "\" class=\"timeline-graph\"></svg>
        <script>";
            // line 211
            echo "            window.addEventListener('load', function onLoad() {
                new TimelineEngine(
                    new SvgRenderer(document.getElementById('timeline-";
            // line 213
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "js", null, true);
            echo "')),
                    new Legend(document.getElementById('legend-";
            // line 214
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "js", null, true);
            echo "'), ";
            echo json_encode(($context["classnames"] ?? null));
            echo "),
                    document.getElementById('threshold'),
                    ";
            // line 216
            echo twig_call_macro($macros["helper"], "macro_dump_request_data", [($context["token"] ?? null), ($context["events"] ?? null), ($context["origin"] ?? null)], 216, $context, $this->getSourceContext());
            echo "
                );
            });
        ";
            // line 219
            echo "</script>
    </div>
";
            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  613 => 219,  607 => 216,  600 => 214,  596 => 213,  592 => 211,  588 => 209,  584 => 208,  581 => 207,  579 => 206,  560 => 205,  541 => 198,  532 => 194,  528 => 193,  524 => 192,  521 => 191,  517 => 190,  512 => 187,  508 => 186,  504 => 185,  500 => 184,  496 => 183,  492 => 182,  488 => 181,  485 => 180,  483 => 179,  479 => 178,  463 => 176,  448 => 171,  444 => 170,  440 => 169,  436 => 168,  433 => 167,  431 => 166,  413 => 164,  405 => 161,  403 => 160,  399 => 158,  397 => 157,  386 => 148,  383 => 147,  375 => 145,  369 => 142,  363 => 141,  360 => 140,  357 => 139,  353 => 138,  348 => 136,  344 => 134,  342 => 133,  337 => 131,  334 => 130,  328 => 127,  325 => 126,  323 => 125,  317 => 122,  313 => 121,  308 => 119,  305 => 118,  303 => 117,  294 => 110,  287 => 109,  276 => 105,  270 => 101,  268 => 100,  263 => 97,  261 => 96,  255 => 92,  249 => 89,  245 => 88,  241 => 86,  238 => 85,  235 => 84,  232 => 83,  226 => 82,  223 => 81,  218 => 80,  215 => 79,  213 => 78,  207 => 75,  203 => 74,  198 => 71,  196 => 70,  193 => 69,  186 => 65,  183 => 64,  181 => 63,  174 => 59,  166 => 54,  160 => 50,  157 => 49,  150 => 48,  139 => 43,  136 => 42,  129 => 41,  120 => 38,  117 => 37,  111 => 34,  104 => 30,  100 => 28,  98 => 27,  95 => 26,  89 => 23,  84 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  60 => 15,  52 => 1,  50 => 5,  48 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/time.html.twig", "/Users/vitekd/Documents/GitHub/baryzive/vendor/symfony/web-profiler-bundle/Resources/views/Collector/time.html.twig");
    }
}
