<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ae7487fe7d4a170cdf04e13b4dc46c1cfcc7f7eb8b672d8c1cd0f4051e3dedcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dce85ec645bf58907ac05ee43d1fac313379433b9a2a92b56dce86054c4eb319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce85ec645bf58907ac05ee43d1fac313379433b9a2a92b56dce86054c4eb319->enter($__internal_dce85ec645bf58907ac05ee43d1fac313379433b9a2a92b56dce86054c4eb319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dce85ec645bf58907ac05ee43d1fac313379433b9a2a92b56dce86054c4eb319->leave($__internal_dce85ec645bf58907ac05ee43d1fac313379433b9a2a92b56dce86054c4eb319_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
