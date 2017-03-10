<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_7013bc85a940fbe1991033d427d644d4dfa36ce9a265a1314cd86562599eb3e2 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_433bd84efc158e86bb9a2ac8535df425a86b53dc8c5fe6c65fe1c2dd43069f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433bd84efc158e86bb9a2ac8535df425a86b53dc8c5fe6c65fe1c2dd43069f12->enter($__internal_433bd84efc158e86bb9a2ac8535df425a86b53dc8c5fe6c65fe1c2dd43069f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_433bd84efc158e86bb9a2ac8535df425a86b53dc8c5fe6c65fe1c2dd43069f12->leave($__internal_433bd84efc158e86bb9a2ac8535df425a86b53dc8c5fe6c65fe1c2dd43069f12_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_01ad1b7207f48fc22ff49e3da1ac7b930119da37eec2d1083ccb5effc2268bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ad1b7207f48fc22ff49e3da1ac7b930119da37eec2d1083ccb5effc2268bbb->enter($__internal_01ad1b7207f48fc22ff49e3da1ac7b930119da37eec2d1083ccb5effc2268bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_01ad1b7207f48fc22ff49e3da1ac7b930119da37eec2d1083ccb5effc2268bbb->leave($__internal_01ad1b7207f48fc22ff49e3da1ac7b930119da37eec2d1083ccb5effc2268bbb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
