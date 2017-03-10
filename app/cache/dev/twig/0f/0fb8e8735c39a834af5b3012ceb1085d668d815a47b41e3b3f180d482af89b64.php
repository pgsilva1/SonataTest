<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_b4f38531e777671ebd961842efa705752c586d126e6e6215308fe568a48f0164 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3cf6f7c0daab5bb1a9f246de8bfd0bd0dad7eaee9c9f85bbb3969913db81147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3cf6f7c0daab5bb1a9f246de8bfd0bd0dad7eaee9c9f85bbb3969913db81147->enter($__internal_a3cf6f7c0daab5bb1a9f246de8bfd0bd0dad7eaee9c9f85bbb3969913db81147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3cf6f7c0daab5bb1a9f246de8bfd0bd0dad7eaee9c9f85bbb3969913db81147->leave($__internal_a3cf6f7c0daab5bb1a9f246de8bfd0bd0dad7eaee9c9f85bbb3969913db81147_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6b7e67900fa8e8e7644b99a6880745b7427e67f9e3a70a85d1dc067899d8d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b7e67900fa8e8e7644b99a6880745b7427e67f9e3a70a85d1dc067899d8d80->enter($__internal_a6b7e67900fa8e8e7644b99a6880745b7427e67f9e3a70a85d1dc067899d8d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a6b7e67900fa8e8e7644b99a6880745b7427e67f9e3a70a85d1dc067899d8d80->leave($__internal_a6b7e67900fa8e8e7644b99a6880745b7427e67f9e3a70a85d1dc067899d8d80_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c38f8777331158147c3129ff628ac0d9a3c488e870026cbaa125ee7b4cb6341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c38f8777331158147c3129ff628ac0d9a3c488e870026cbaa125ee7b4cb6341->enter($__internal_3c38f8777331158147c3129ff628ac0d9a3c488e870026cbaa125ee7b4cb6341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_3c38f8777331158147c3129ff628ac0d9a3c488e870026cbaa125ee7b4cb6341->leave($__internal_3c38f8777331158147c3129ff628ac0d9a3c488e870026cbaa125ee7b4cb6341_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9cd40f901f4455dadeda115bc38cf579fc7ddfb62656577b747f323598cabb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9cd40f901f4455dadeda115bc38cf579fc7ddfb62656577b747f323598cabb5->enter($__internal_b9cd40f901f4455dadeda115bc38cf579fc7ddfb62656577b747f323598cabb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_b9cd40f901f4455dadeda115bc38cf579fc7ddfb62656577b747f323598cabb5->leave($__internal_b9cd40f901f4455dadeda115bc38cf579fc7ddfb62656577b747f323598cabb5_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_630b89f89aa5898998efe09e03ab12120850960289586313066a01fe5cae7952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630b89f89aa5898998efe09e03ab12120850960289586313066a01fe5cae7952->enter($__internal_630b89f89aa5898998efe09e03ab12120850960289586313066a01fe5cae7952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_630b89f89aa5898998efe09e03ab12120850960289586313066a01fe5cae7952->leave($__internal_630b89f89aa5898998efe09e03ab12120850960289586313066a01fe5cae7952_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
