<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_42a2c2e35a486bbfde2ebdc2d5219fa4ad91db0ae3b6428d0bbd2483bf6b7b2c extends Twig_Template
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
        $__internal_a6ec6f8bde1ac2b25756375649401331873599890ab1fadaeacbbf06b918960b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ec6f8bde1ac2b25756375649401331873599890ab1fadaeacbbf06b918960b->enter($__internal_a6ec6f8bde1ac2b25756375649401331873599890ab1fadaeacbbf06b918960b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a6ec6f8bde1ac2b25756375649401331873599890ab1fadaeacbbf06b918960b->leave($__internal_a6ec6f8bde1ac2b25756375649401331873599890ab1fadaeacbbf06b918960b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
