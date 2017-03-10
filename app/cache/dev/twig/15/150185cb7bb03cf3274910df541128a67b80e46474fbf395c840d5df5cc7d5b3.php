<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_91f38a13c9d7f91c02262d875adf6905183582bfa2edd243ae7f4782fd56e2f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2b7f3d3ee822a836c6833a982d29be522453ea0e4e934af45dc53f748184f7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7f3d3ee822a836c6833a982d29be522453ea0e4e934af45dc53f748184f7a9->enter($__internal_2b7f3d3ee822a836c6833a982d29be522453ea0e4e934af45dc53f748184f7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b7f3d3ee822a836c6833a982d29be522453ea0e4e934af45dc53f748184f7a9->leave($__internal_2b7f3d3ee822a836c6833a982d29be522453ea0e4e934af45dc53f748184f7a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ed19348b368ae5e7f158211b2d028139343a839dc5b2bb96ff836bd5dfedfd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed19348b368ae5e7f158211b2d028139343a839dc5b2bb96ff836bd5dfedfd3->enter($__internal_5ed19348b368ae5e7f158211b2d028139343a839dc5b2bb96ff836bd5dfedfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ed19348b368ae5e7f158211b2d028139343a839dc5b2bb96ff836bd5dfedfd3->leave($__internal_5ed19348b368ae5e7f158211b2d028139343a839dc5b2bb96ff836bd5dfedfd3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_376db8e0c7b304aa5777e731a7a8c31a4b6689dccf863eb01560d365becbca8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376db8e0c7b304aa5777e731a7a8c31a4b6689dccf863eb01560d365becbca8a->enter($__internal_376db8e0c7b304aa5777e731a7a8c31a4b6689dccf863eb01560d365becbca8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_376db8e0c7b304aa5777e731a7a8c31a4b6689dccf863eb01560d365becbca8a->leave($__internal_376db8e0c7b304aa5777e731a7a8c31a4b6689dccf863eb01560d365becbca8a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3296795bed37482f799bdf703c8737bbb144140d30dd8e38c1f9064ae305e27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3296795bed37482f799bdf703c8737bbb144140d30dd8e38c1f9064ae305e27a->enter($__internal_3296795bed37482f799bdf703c8737bbb144140d30dd8e38c1f9064ae305e27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3296795bed37482f799bdf703c8737bbb144140d30dd8e38c1f9064ae305e27a->leave($__internal_3296795bed37482f799bdf703c8737bbb144140d30dd8e38c1f9064ae305e27a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
