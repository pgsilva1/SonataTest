<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6322c9cfc343583d4593d5208cfcbf027db4520abef291dac5a2d396c5fc47fb extends Twig_Template
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
        $__internal_0b72dcc0df6d5e7bd620aad889b716fe71d4eebfdb0a8bc5952a8aeed152214f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b72dcc0df6d5e7bd620aad889b716fe71d4eebfdb0a8bc5952a8aeed152214f->enter($__internal_0b72dcc0df6d5e7bd620aad889b716fe71d4eebfdb0a8bc5952a8aeed152214f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0b72dcc0df6d5e7bd620aad889b716fe71d4eebfdb0a8bc5952a8aeed152214f->leave($__internal_0b72dcc0df6d5e7bd620aad889b716fe71d4eebfdb0a8bc5952a8aeed152214f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
