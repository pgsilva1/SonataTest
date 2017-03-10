<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_0bdbf681f92fbc9011492977b671374593ced74ea05696f983ca9b4cb489f134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bdac946f43e4bca5c978e5bbeb80827759b05423f2cf549712cefad8da8ea2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdac946f43e4bca5c978e5bbeb80827759b05423f2cf549712cefad8da8ea2f->enter($__internal_4bdac946f43e4bca5c978e5bbeb80827759b05423f2cf549712cefad8da8ea2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bdac946f43e4bca5c978e5bbeb80827759b05423f2cf549712cefad8da8ea2f->leave($__internal_4bdac946f43e4bca5c978e5bbeb80827759b05423f2cf549712cefad8da8ea2f_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_9672bda282d8f7eeefca6681afc26a38fb55711d29c81089b8ac83d81adcdca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9672bda282d8f7eeefca6681afc26a38fb55711d29c81089b8ac83d81adcdca3->enter($__internal_9672bda282d8f7eeefca6681afc26a38fb55711d29c81089b8ac83d81adcdca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo ($context["content"] ?? $this->getContext($context, "content"));
        echo "
";
        
        $__internal_9672bda282d8f7eeefca6681afc26a38fb55711d29c81089b8ac83d81adcdca3->leave($__internal_9672bda282d8f7eeefca6681afc26a38fb55711d29c81089b8ac83d81adcdca3_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
