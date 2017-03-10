<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a40ad8e88f7d31da4f6ecd3df2095c0af0aae610edbf5b763750bb65c31de644 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_bf404a8f5c66dee7d3f5e7c64be3a3f3a05851c0ae210ae828f01b821bf47777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf404a8f5c66dee7d3f5e7c64be3a3f3a05851c0ae210ae828f01b821bf47777->enter($__internal_bf404a8f5c66dee7d3f5e7c64be3a3f3a05851c0ae210ae828f01b821bf47777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf404a8f5c66dee7d3f5e7c64be3a3f3a05851c0ae210ae828f01b821bf47777->leave($__internal_bf404a8f5c66dee7d3f5e7c64be3a3f3a05851c0ae210ae828f01b821bf47777_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dde6197eba5b1eacdfaf50d2dab5ca073e8125639a056250662729ff1d65e5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde6197eba5b1eacdfaf50d2dab5ca073e8125639a056250662729ff1d65e5ea->enter($__internal_dde6197eba5b1eacdfaf50d2dab5ca073e8125639a056250662729ff1d65e5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_dde6197eba5b1eacdfaf50d2dab5ca073e8125639a056250662729ff1d65e5ea->leave($__internal_dde6197eba5b1eacdfaf50d2dab5ca073e8125639a056250662729ff1d65e5ea_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82cd87db7a5964af2d1ce8366e5f351290eb047dc4b5885c19f8a6a17bd669b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cd87db7a5964af2d1ce8366e5f351290eb047dc4b5885c19f8a6a17bd669b3->enter($__internal_82cd87db7a5964af2d1ce8366e5f351290eb047dc4b5885c19f8a6a17bd669b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_82cd87db7a5964af2d1ce8366e5f351290eb047dc4b5885c19f8a6a17bd669b3->leave($__internal_82cd87db7a5964af2d1ce8366e5f351290eb047dc4b5885c19f8a6a17bd669b3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7ec5c2b4d37c443372efbe4af0c21816eee512d453ad2fba76662c20a0ad15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ec5c2b4d37c443372efbe4af0c21816eee512d453ad2fba76662c20a0ad15e->enter($__internal_e7ec5c2b4d37c443372efbe4af0c21816eee512d453ad2fba76662c20a0ad15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e7ec5c2b4d37c443372efbe4af0c21816eee512d453ad2fba76662c20a0ad15e->leave($__internal_e7ec5c2b4d37c443372efbe4af0c21816eee512d453ad2fba76662c20a0ad15e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
