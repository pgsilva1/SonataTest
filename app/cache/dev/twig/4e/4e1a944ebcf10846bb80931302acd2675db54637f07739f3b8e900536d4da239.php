<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_a05fd7072be171347d94f556c82453b6dcd973890d9dcd6ec3f6f3a37d011d3e extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_998fe17a952206c24abd8543e72c61e261809bc1a0c1f66faecb64bb58e0152a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998fe17a952206c24abd8543e72c61e261809bc1a0c1f66faecb64bb58e0152a->enter($__internal_998fe17a952206c24abd8543e72c61e261809bc1a0c1f66faecb64bb58e0152a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_998fe17a952206c24abd8543e72c61e261809bc1a0c1f66faecb64bb58e0152a->leave($__internal_998fe17a952206c24abd8543e72c61e261809bc1a0c1f66faecb64bb58e0152a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_3768d858cdc9291aeb9bfce694047ec726fe3892473b26958c852d242b5b72c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3768d858cdc9291aeb9bfce694047ec726fe3892473b26958c852d242b5b72c8->enter($__internal_3768d858cdc9291aeb9bfce694047ec726fe3892473b26958c852d242b5b72c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_3768d858cdc9291aeb9bfce694047ec726fe3892473b26958c852d242b5b72c8->leave($__internal_3768d858cdc9291aeb9bfce694047ec726fe3892473b26958c852d242b5b72c8_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
