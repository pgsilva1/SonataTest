<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_d80c112e6789f1fb0affe0c619d8c9c3f4632cc5e7979b87412c2815659dc0cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_378cfef1536ef0f0f3213d2000a33a392cd242d860f97d1db083d7c6251d2925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378cfef1536ef0f0f3213d2000a33a392cd242d860f97d1db083d7c6251d2925->enter($__internal_378cfef1536ef0f0f3213d2000a33a392cd242d860f97d1db083d7c6251d2925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_378cfef1536ef0f0f3213d2000a33a392cd242d860f97d1db083d7c6251d2925->leave($__internal_378cfef1536ef0f0f3213d2000a33a392cd242d860f97d1db083d7c6251d2925_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_2c34d3e3dfb010626807642a238ad47a7cd4cc769025fe1f18723f90328af1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c34d3e3dfb010626807642a238ad47a7cd4cc769025fe1f18723f90328af1e9->enter($__internal_2c34d3e3dfb010626807642a238ad47a7cd4cc769025fe1f18723f90328af1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_2c34d3e3dfb010626807642a238ad47a7cd4cc769025fe1f18723f90328af1e9->leave($__internal_2c34d3e3dfb010626807642a238ad47a7cd4cc769025fe1f18723f90328af1e9_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_d42666b6e8103725ded16094f907ec60deb24bb6e10ef61e2f2bde93b91aef99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42666b6e8103725ded16094f907ec60deb24bb6e10ef61e2f2bde93b91aef99->enter($__internal_d42666b6e8103725ded16094f907ec60deb24bb6e10ef61e2f2bde93b91aef99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_d42666b6e8103725ded16094f907ec60deb24bb6e10ef61e2f2bde93b91aef99->leave($__internal_d42666b6e8103725ded16094f907ec60deb24bb6e10ef61e2f2bde93b91aef99_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_08a78dc75afe21c5ac736dc9c4cbd084b6c47020502d3db0642b2941486dadf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a78dc75afe21c5ac736dc9c4cbd084b6c47020502d3db0642b2941486dadf3->enter($__internal_08a78dc75afe21c5ac736dc9c4cbd084b6c47020502d3db0642b2941486dadf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclRolesForm"] ?? $this->getContext($context, "aclRolesForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_role", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_08a78dc75afe21c5ac736dc9c4cbd084b6c47020502d3db0642b2941486dadf3->leave($__internal_08a78dc75afe21c5ac736dc9c4cbd084b6c47020502d3db0642b2941486dadf3_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_738045e69c9d71c5bf01af519c745987270455ed8cbe2085937c9aa88e27f016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738045e69c9d71c5bf01af519c745987270455ed8cbe2085937c9aa88e27f016->enter($__internal_738045e69c9d71c5bf01af519c745987270455ed8cbe2085937c9aa88e27f016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclUsersForm"] ?? $this->getContext($context, "aclUsersForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_username", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_738045e69c9d71c5bf01af519c745987270455ed8cbe2085937c9aa88e27f016->leave($__internal_738045e69c9d71c5bf01af519c745987270455ed8cbe2085937c9aa88e27f016_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
