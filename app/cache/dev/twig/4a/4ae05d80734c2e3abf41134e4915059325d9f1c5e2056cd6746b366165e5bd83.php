<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_d5a294d05d53d463904c9ab1fb463b2ddd71c3c0bd7dadd83e2a2933539c289e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4230e3f975d817fd60a2aaa6184780e7a5d978f20e577008f3f36e9490ccfe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4230e3f975d817fd60a2aaa6184780e7a5d978f20e577008f3f36e9490ccfe2->enter($__internal_f4230e3f975d817fd60a2aaa6184780e7a5d978f20e577008f3f36e9490ccfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4230e3f975d817fd60a2aaa6184780e7a5d978f20e577008f3f36e9490ccfe2->leave($__internal_f4230e3f975d817fd60a2aaa6184780e7a5d978f20e577008f3f36e9490ccfe2_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_1497d26867706b9f1989680b7740a93bcd288e95f799f3e2a6464feb6b99079b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1497d26867706b9f1989680b7740a93bcd288e95f799f3e2a6464feb6b99079b->enter($__internal_1497d26867706b9f1989680b7740a93bcd288e95f799f3e2a6464feb6b99079b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_1497d26867706b9f1989680b7740a93bcd288e95f799f3e2a6464feb6b99079b->leave($__internal_1497d26867706b9f1989680b7740a93bcd288e95f799f3e2a6464feb6b99079b_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_1e63f75007aa921128587b46a7232e2b516575414a652667751caec3eaf6d99e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e63f75007aa921128587b46a7232e2b516575414a652667751caec3eaf6d99e->enter($__internal_1e63f75007aa921128587b46a7232e2b516575414a652667751caec3eaf6d99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_1e63f75007aa921128587b46a7232e2b516575414a652667751caec3eaf6d99e->leave($__internal_1e63f75007aa921128587b46a7232e2b516575414a652667751caec3eaf6d99e_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_78c935153d786676160e11a42de205cb2eade1d537a42fb769640d3dd456cfbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c935153d786676160e11a42de205cb2eade1d537a42fb769640d3dd456cfbc->enter($__internal_78c935153d786676160e11a42de205cb2eade1d537a42fb769640d3dd456cfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if (($context["decorator"] ?? $this->getContext($context, "decorator"))) {
            echo $this->getAttribute(($context["decorator"] ?? $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if (($context["decorator"] ?? $this->getContext($context, "decorator"))) {
            echo $this->getAttribute(($context["decorator"] ?? $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_78c935153d786676160e11a42de205cb2eade1d537a42fb769640d3dd456cfbc->leave($__internal_78c935153d786676160e11a42de205cb2eade1d537a42fb769640d3dd456cfbc_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_10eeb29852b28cd2fe0f0a2611b25bfc3554141140bcb249d7f3750a473cacef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10eeb29852b28cd2fe0f0a2611b25bfc3554141140bcb249d7f3750a473cacef->enter($__internal_10eeb29852b28cd2fe0f0a2611b25bfc3554141140bcb249d7f3750a473cacef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(($context["child"] ?? $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_10eeb29852b28cd2fe0f0a2611b25bfc3554141140bcb249d7f3750a473cacef->leave($__internal_10eeb29852b28cd2fe0f0a2611b25bfc3554141140bcb249d7f3750a473cacef_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  123 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  67 => 21,  55 => 18,  36 => 15,  21 => 12,);
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

{% extends sonata_block.templates.block_base %}

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "SonataBlockBundle:Block:block_container.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
