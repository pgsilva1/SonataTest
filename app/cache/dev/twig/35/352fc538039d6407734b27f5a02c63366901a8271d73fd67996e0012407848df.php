<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_dc5e8ddb41d851caf2253e5788e283cb221b4884e41e73dec7fa02bc561df09c extends Twig_Template
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
        $__internal_b9c837dd60c8ee0aa228b1581e5725aa9e9a39154fe5ea822b691a4ec0d53985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c837dd60c8ee0aa228b1581e5725aa9e9a39154fe5ea822b691a4ec0d53985->enter($__internal_b9c837dd60c8ee0aa228b1581e5725aa9e9a39154fe5ea822b691a4ec0d53985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b9c837dd60c8ee0aa228b1581e5725aa9e9a39154fe5ea822b691a4ec0d53985->leave($__internal_b9c837dd60c8ee0aa228b1581e5725aa9e9a39154fe5ea822b691a4ec0d53985_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
