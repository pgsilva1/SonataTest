<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e7dc79d36eeb8e4fcebe0b053081787ceaec4ed42ab5f599352f1149c7ad97b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_5e00caf9ce5f8767d75ccec6887e57d749563b7475979c9ab09120991dfc83da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e00caf9ce5f8767d75ccec6887e57d749563b7475979c9ab09120991dfc83da->enter($__internal_5e00caf9ce5f8767d75ccec6887e57d749563b7475979c9ab09120991dfc83da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e00caf9ce5f8767d75ccec6887e57d749563b7475979c9ab09120991dfc83da->leave($__internal_5e00caf9ce5f8767d75ccec6887e57d749563b7475979c9ab09120991dfc83da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4f51fd2ac70c173f7fbb1bc0ce79136658ab8ade5929bde758122373b7dcb651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f51fd2ac70c173f7fbb1bc0ce79136658ab8ade5929bde758122373b7dcb651->enter($__internal_4f51fd2ac70c173f7fbb1bc0ce79136658ab8ade5929bde758122373b7dcb651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4f51fd2ac70c173f7fbb1bc0ce79136658ab8ade5929bde758122373b7dcb651->leave($__internal_4f51fd2ac70c173f7fbb1bc0ce79136658ab8ade5929bde758122373b7dcb651_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6aa50c4f9750ce369383ed58a99af9ee23868db927fc9ef95fdcb8bfa28b8869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa50c4f9750ce369383ed58a99af9ee23868db927fc9ef95fdcb8bfa28b8869->enter($__internal_6aa50c4f9750ce369383ed58a99af9ee23868db927fc9ef95fdcb8bfa28b8869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6aa50c4f9750ce369383ed58a99af9ee23868db927fc9ef95fdcb8bfa28b8869->leave($__internal_6aa50c4f9750ce369383ed58a99af9ee23868db927fc9ef95fdcb8bfa28b8869_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94d5224446df9b1271d08afb6beb55cfffa656b344adc228b7a9a48393086d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d5224446df9b1271d08afb6beb55cfffa656b344adc228b7a9a48393086d85->enter($__internal_94d5224446df9b1271d08afb6beb55cfffa656b344adc228b7a9a48393086d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_94d5224446df9b1271d08afb6beb55cfffa656b344adc228b7a9a48393086d85->leave($__internal_94d5224446df9b1271d08afb6beb55cfffa656b344adc228b7a9a48393086d85_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
