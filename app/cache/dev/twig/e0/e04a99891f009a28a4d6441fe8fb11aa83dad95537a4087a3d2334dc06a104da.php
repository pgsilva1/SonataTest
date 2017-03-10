<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_1c288d6b0fdbc12e372c16299069bfcc1f0acd8e519526050afe5ae81b518058 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be44a09bed91bd6e3522a9b47daeff5d394f88ff44c080405ec5f9d69ca98efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be44a09bed91bd6e3522a9b47daeff5d394f88ff44c080405ec5f9d69ca98efc->enter($__internal_be44a09bed91bd6e3522a9b47daeff5d394f88ff44c080405ec5f9d69ca98efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be44a09bed91bd6e3522a9b47daeff5d394f88ff44c080405ec5f9d69ca98efc->leave($__internal_be44a09bed91bd6e3522a9b47daeff5d394f88ff44c080405ec5f9d69ca98efc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d162367144ca856750e68d0e86fa7b4ac4f640fd560354bc13933c2f180ba3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d162367144ca856750e68d0e86fa7b4ac4f640fd560354bc13933c2f180ba3ff->enter($__internal_d162367144ca856750e68d0e86fa7b4ac4f640fd560354bc13933c2f180ba3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_d162367144ca856750e68d0e86fa7b4ac4f640fd560354bc13933c2f180ba3ff->leave($__internal_d162367144ca856750e68d0e86fa7b4ac4f640fd560354bc13933c2f180ba3ff_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
