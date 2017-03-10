<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_7c62394b75ba53d21be54fd6fc58322d67f28d47d322e30b4f2d51a5a8e38690 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a34b4eae7349fb81e57f393abf3dd1ccae3e6dd18805ae78f455042c32f514f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a34b4eae7349fb81e57f393abf3dd1ccae3e6dd18805ae78f455042c32f514f->enter($__internal_1a34b4eae7349fb81e57f393abf3dd1ccae3e6dd18805ae78f455042c32f514f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a34b4eae7349fb81e57f393abf3dd1ccae3e6dd18805ae78f455042c32f514f->leave($__internal_1a34b4eae7349fb81e57f393abf3dd1ccae3e6dd18805ae78f455042c32f514f_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_1f92bf30b40c1789b8421e8bf584fd2497478fb768d3f78201d842674872e72c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f92bf30b40c1789b8421e8bf584fd2497478fb768d3f78201d842674872e72c->enter($__internal_1f92bf30b40c1789b8421e8bf584fd2497478fb768d3f78201d842674872e72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_1f92bf30b40c1789b8421e8bf584fd2497478fb768d3f78201d842674872e72c->leave($__internal_1f92bf30b40c1789b8421e8bf584fd2497478fb768d3f78201d842674872e72c_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_09b4cebc67bce757ff0a06efb83ff629299ead5678f9b049604d4a66372cd1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b4cebc67bce757ff0a06efb83ff629299ead5678f9b049604d4a66372cd1f5->enter($__internal_09b4cebc67bce757ff0a06efb83ff629299ead5678f9b049604d4a66372cd1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_09b4cebc67bce757ff0a06efb83ff629299ead5678f9b049604d4a66372cd1f5->leave($__internal_09b4cebc67bce757ff0a06efb83ff629299ead5678f9b049604d4a66372cd1f5_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_62640985d18c1eb029b245023bdbb4e3a367b5067ef8bea1404bc82ec780c5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62640985d18c1eb029b245023bdbb4e3a367b5067ef8bea1404bc82ec780c5f8->enter($__internal_62640985d18c1eb029b245023bdbb4e3a367b5067ef8bea1404bc82ec780c5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_62640985d18c1eb029b245023bdbb4e3a367b5067ef8bea1404bc82ec780c5f8->leave($__internal_62640985d18c1eb029b245023bdbb4e3a367b5067ef8bea1404bc82ec780c5f8_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_2894604d2d5fc52ecd35cdd052d4d55b51110e249d7059b78af678e109fa9c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2894604d2d5fc52ecd35cdd052d4d55b51110e249d7059b78af678e109fa9c6d->enter($__internal_2894604d2d5fc52ecd35cdd052d4d55b51110e249d7059b78af678e109fa9c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_2894604d2d5fc52ecd35cdd052d4d55b51110e249d7059b78af678e109fa9c6d->leave($__internal_2894604d2d5fc52ecd35cdd052d4d55b51110e249d7059b78af678e109fa9c6d_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85e30597370b1991c86898883dd5a43d18eaf870a5dbb2c394c0c1e16a184a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e30597370b1991c86898883dd5a43d18eaf870a5dbb2c394c0c1e16a184a2f->enter($__internal_85e30597370b1991c86898883dd5a43d18eaf870a5dbb2c394c0c1e16a184a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_85e30597370b1991c86898883dd5a43d18eaf870a5dbb2c394c0c1e16a184a2f->leave($__internal_85e30597370b1991c86898883dd5a43d18eaf870a5dbb2c394c0c1e16a184a2f_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_70faaf7d35744b6bc08961965eba3014fcd4629b2d50dc946e5816c58a5fbe9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70faaf7d35744b6bc08961965eba3014fcd4629b2d50dc946e5816c58a5fbe9c->enter($__internal_70faaf7d35744b6bc08961965eba3014fcd4629b2d50dc946e5816c58a5fbe9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_70faaf7d35744b6bc08961965eba3014fcd4629b2d50dc946e5816c58a5fbe9c->leave($__internal_70faaf7d35744b6bc08961965eba3014fcd4629b2d50dc946e5816c58a5fbe9c_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_c9a4724c4a76eed1b6bbe47e9d6e59aa7759499493037aac5aef25bb0ad0fbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a4724c4a76eed1b6bbe47e9d6e59aa7759499493037aac5aef25bb0ad0fbf2->enter($__internal_c9a4724c4a76eed1b6bbe47e9d6e59aa7759499493037aac5aef25bb0ad0fbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_c9a4724c4a76eed1b6bbe47e9d6e59aa7759499493037aac5aef25bb0ad0fbf2->leave($__internal_c9a4724c4a76eed1b6bbe47e9d6e59aa7759499493037aac5aef25bb0ad0fbf2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
