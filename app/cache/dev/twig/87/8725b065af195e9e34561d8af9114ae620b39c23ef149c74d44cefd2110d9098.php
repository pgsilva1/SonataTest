<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_9dea9fe941d1dc370040aaf20bf6771e61a961240d3e7266519cc5be5f40be60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb5dafb451d857e905a1c6d37eab42bb245696802059e598c101a1be98013f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5dafb451d857e905a1c6d37eab42bb245696802059e598c101a1be98013f85->enter($__internal_eb5dafb451d857e905a1c6d37eab42bb245696802059e598c101a1be98013f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_eb5dafb451d857e905a1c6d37eab42bb245696802059e598c101a1be98013f85->leave($__internal_eb5dafb451d857e905a1c6d37eab42bb245696802059e598c101a1be98013f85_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_365c36354a85b375e9d3c2a03dc43276ceafd205702ffcc8c0d9b9bbfc3727e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365c36354a85b375e9d3c2a03dc43276ceafd205702ffcc8c0d9b9bbfc3727e5->enter($__internal_365c36354a85b375e9d3c2a03dc43276ceafd205702ffcc8c0d9b9bbfc3727e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_365c36354a85b375e9d3c2a03dc43276ceafd205702ffcc8c0d9b9bbfc3727e5->leave($__internal_365c36354a85b375e9d3c2a03dc43276ceafd205702ffcc8c0d9b9bbfc3727e5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
