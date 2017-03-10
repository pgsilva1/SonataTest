<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_5e2f33b88622e6308610822499c9079a6a827432e2f5887c1b2f0a91c2c8c0d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3391037afebd4a43479c7dd0d629f953e298ae75a027055c00df149bf256158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3391037afebd4a43479c7dd0d629f953e298ae75a027055c00df149bf256158->enter($__internal_f3391037afebd4a43479c7dd0d629f953e298ae75a027055c00df149bf256158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_f3391037afebd4a43479c7dd0d629f953e298ae75a027055c00df149bf256158->leave($__internal_f3391037afebd4a43479c7dd0d629f953e298ae75a027055c00df149bf256158_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_24122e7fa9d42dcf7d5eae33f8c2dc111d272015938a388323e28fae006d8def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24122e7fa9d42dcf7d5eae33f8c2dc111d272015938a388323e28fae006d8def->enter($__internal_24122e7fa9d42dcf7d5eae33f8c2dc111d272015938a388323e28fae006d8def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_24122e7fa9d42dcf7d5eae33f8c2dc111d272015938a388323e28fae006d8def->leave($__internal_24122e7fa9d42dcf7d5eae33f8c2dc111d272015938a388323e28fae006d8def_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
