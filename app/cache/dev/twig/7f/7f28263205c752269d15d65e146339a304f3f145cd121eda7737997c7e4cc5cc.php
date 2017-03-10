<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_b42fe7ed909aa4ff6cdba0e6587fc9701be74268070cb37d525fec34ae4af6d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67c6f57fbb6161e880253b34b4497de1e610a14c258baf2d57a4607e3de89629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c6f57fbb6161e880253b34b4497de1e610a14c258baf2d57a4607e3de89629->enter($__internal_67c6f57fbb6161e880253b34b4497de1e610a14c258baf2d57a4607e3de89629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_67c6f57fbb6161e880253b34b4497de1e610a14c258baf2d57a4607e3de89629->leave($__internal_67c6f57fbb6161e880253b34b4497de1e610a14c258baf2d57a4607e3de89629_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_436adbe2b569e40be913af54f78a65c831be54a10cf507f51c36b171dedd2091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436adbe2b569e40be913af54f78a65c831be54a10cf507f51c36b171dedd2091->enter($__internal_436adbe2b569e40be913af54f78a65c831be54a10cf507f51c36b171dedd2091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_436adbe2b569e40be913af54f78a65c831be54a10cf507f51c36b171dedd2091->leave($__internal_436adbe2b569e40be913af54f78a65c831be54a10cf507f51c36b171dedd2091_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_234fdebd7df458656e0e992e98ac4e44392660ed80080391b6b47ba070651d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234fdebd7df458656e0e992e98ac4e44392660ed80080391b6b47ba070651d6f->enter($__internal_234fdebd7df458656e0e992e98ac4e44392660ed80080391b6b47ba070651d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_234fdebd7df458656e0e992e98ac4e44392660ed80080391b6b47ba070651d6f->leave($__internal_234fdebd7df458656e0e992e98ac4e44392660ed80080391b6b47ba070651d6f_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_215f6dbad7a51ca43fdb00637eb30727c8be6f06ced4cfa120a519ac479cf646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215f6dbad7a51ca43fdb00637eb30727c8be6f06ced4cfa120a519ac479cf646->enter($__internal_215f6dbad7a51ca43fdb00637eb30727c8be6f06ced4cfa120a519ac479cf646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_215f6dbad7a51ca43fdb00637eb30727c8be6f06ced4cfa120a519ac479cf646->leave($__internal_215f6dbad7a51ca43fdb00637eb30727c8be6f06ced4cfa120a519ac479cf646_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
