<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_9e48e4fa605c8fdc2c053a0319aa3e1646ad4777935d3bb8b83501c2d8bf0cb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a5edb3cc8b068b722b59bfd7653ead2027ac00128d25ac2ae586c411173e1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5edb3cc8b068b722b59bfd7653ead2027ac00128d25ac2ae586c411173e1f8->enter($__internal_2a5edb3cc8b068b722b59bfd7653ead2027ac00128d25ac2ae586c411173e1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a5edb3cc8b068b722b59bfd7653ead2027ac00128d25ac2ae586c411173e1f8->leave($__internal_2a5edb3cc8b068b722b59bfd7653ead2027ac00128d25ac2ae586c411173e1f8_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_2fca6b171f4133a7238543af9d1425f8b1cdc27db1a1e47c02ec5ed8d8982d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fca6b171f4133a7238543af9d1425f8b1cdc27db1a1e47c02ec5ed8d8982d2b->enter($__internal_2fca6b171f4133a7238543af9d1425f8b1cdc27db1a1e47c02ec5ed8d8982d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_2fca6b171f4133a7238543af9d1425f8b1cdc27db1a1e47c02ec5ed8d8982d2b->leave($__internal_2fca6b171f4133a7238543af9d1425f8b1cdc27db1a1e47c02ec5ed8d8982d2b_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_6dc62d7eb6d4a9f7e39102d776e440591a515c972d1f0e7b1d76a1c152472bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc62d7eb6d4a9f7e39102d776e440591a515c972d1f0e7b1d76a1c152472bdc->enter($__internal_6dc62d7eb6d4a9f7e39102d776e440591a515c972d1f0e7b1d76a1c152472bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_6dc62d7eb6d4a9f7e39102d776e440591a515c972d1f0e7b1d76a1c152472bdc->leave($__internal_6dc62d7eb6d4a9f7e39102d776e440591a515c972d1f0e7b1d76a1c152472bdc_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_6c32a70f723fbf004939f259c14ce63be9bf317ad7d35e2d3ae72ed958ba4c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c32a70f723fbf004939f259c14ce63be9bf317ad7d35e2d3ae72ed958ba4c5e->enter($__internal_6c32a70f723fbf004939f259c14ce63be9bf317ad7d35e2d3ae72ed958ba4c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_6c32a70f723fbf004939f259c14ce63be9bf317ad7d35e2d3ae72ed958ba4c5e->leave($__internal_6c32a70f723fbf004939f259c14ce63be9bf317ad7d35e2d3ae72ed958ba4c5e_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_f32e30d332c3f7980342654d15a87904dbd04216dd3ff83630ca11400c0ea251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32e30d332c3f7980342654d15a87904dbd04216dd3ff83630ca11400c0ea251->enter($__internal_f32e30d332c3f7980342654d15a87904dbd04216dd3ff83630ca11400c0ea251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), ($context["object"] ?? $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_f32e30d332c3f7980342654d15a87904dbd04216dd3ff83630ca11400c0ea251->leave($__internal_f32e30d332c3f7980342654d15a87904dbd04216dd3ff83630ca11400c0ea251_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_521ec0baacf9234fab7449a2a8052748f6a8bf3d9eec1973769b0d1e1cabccfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521ec0baacf9234fab7449a2a8052748f6a8bf3d9eec1973769b0d1e1cabccfc->enter($__internal_521ec0baacf9234fab7449a2a8052748f6a8bf3d9eec1973769b0d1e1cabccfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_521ec0baacf9234fab7449a2a8052748f6a8bf3d9eec1973769b0d1e1cabccfc->leave($__internal_521ec0baacf9234fab7449a2a8052748f6a8bf3d9eec1973769b0d1e1cabccfc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:preview.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/preview.html.twig");
    }
}
