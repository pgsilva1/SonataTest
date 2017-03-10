<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ef05b68fc8444638bc8546df3fb5437a79c3534f6be0ef7a2bb6b374518e7571 extends Twig_Template
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
        $__internal_e18698ec3f62bb4b80ba623023d43c96040ed0a78247fbb7d554acf3a3daa4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18698ec3f62bb4b80ba623023d43c96040ed0a78247fbb7d554acf3a3daa4c5->enter($__internal_e18698ec3f62bb4b80ba623023d43c96040ed0a78247fbb7d554acf3a3daa4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e18698ec3f62bb4b80ba623023d43c96040ed0a78247fbb7d554acf3a3daa4c5->leave($__internal_e18698ec3f62bb4b80ba623023d43c96040ed0a78247fbb7d554acf3a3daa4c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
