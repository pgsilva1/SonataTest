<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b2604e7f5ad2600def1a4379524b55515b486934073ae0c274858be61979ed92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fc931dadf860b28c9ecf97ad20d0958cccaa418ea54ca0b5afa2bda5c62021c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc931dadf860b28c9ecf97ad20d0958cccaa418ea54ca0b5afa2bda5c62021c->enter($__internal_7fc931dadf860b28c9ecf97ad20d0958cccaa418ea54ca0b5afa2bda5c62021c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fc931dadf860b28c9ecf97ad20d0958cccaa418ea54ca0b5afa2bda5c62021c->leave($__internal_7fc931dadf860b28c9ecf97ad20d0958cccaa418ea54ca0b5afa2bda5c62021c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53b919ee7b30d03860c66252f1c4b6fa9257d4e6f0242dd9fdaafd0c13f89ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b919ee7b30d03860c66252f1c4b6fa9257d4e6f0242dd9fdaafd0c13f89ef0->enter($__internal_53b919ee7b30d03860c66252f1c4b6fa9257d4e6f0242dd9fdaafd0c13f89ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_53b919ee7b30d03860c66252f1c4b6fa9257d4e6f0242dd9fdaafd0c13f89ef0->leave($__internal_53b919ee7b30d03860c66252f1c4b6fa9257d4e6f0242dd9fdaafd0c13f89ef0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4efca8ffc55676cd9939700bb8d6435ec605e19c864db32ef3a00a68fc6b26c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efca8ffc55676cd9939700bb8d6435ec605e19c864db32ef3a00a68fc6b26c3->enter($__internal_4efca8ffc55676cd9939700bb8d6435ec605e19c864db32ef3a00a68fc6b26c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4efca8ffc55676cd9939700bb8d6435ec605e19c864db32ef3a00a68fc6b26c3->leave($__internal_4efca8ffc55676cd9939700bb8d6435ec605e19c864db32ef3a00a68fc6b26c3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0443e2f65ed4b91c19b2dfd566cdbd9b7c028f2dbe146b7c5fd1c58d19b2f8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0443e2f65ed4b91c19b2dfd566cdbd9b7c028f2dbe146b7c5fd1c58d19b2f8d7->enter($__internal_0443e2f65ed4b91c19b2dfd566cdbd9b7c028f2dbe146b7c5fd1c58d19b2f8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0443e2f65ed4b91c19b2dfd566cdbd9b7c028f2dbe146b7c5fd1c58d19b2f8d7->leave($__internal_0443e2f65ed4b91c19b2dfd566cdbd9b7c028f2dbe146b7c5fd1c58d19b2f8d7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
