<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_1c17e32c6284d845ea7f08a87899637b757a5066b6249dc63bbf4bb04a12d595 extends Twig_Template
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
        $__internal_a6e5175ed7d03f2a4dea0b0dcf048a92d71440f2a6ef601dbe0e5f962bdfe88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e5175ed7d03f2a4dea0b0dcf048a92d71440f2a6ef601dbe0e5f962bdfe88e->enter($__internal_a6e5175ed7d03f2a4dea0b0dcf048a92d71440f2a6ef601dbe0e5f962bdfe88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a6e5175ed7d03f2a4dea0b0dcf048a92d71440f2a6ef601dbe0e5f962bdfe88e->leave($__internal_a6e5175ed7d03f2a4dea0b0dcf048a92d71440f2a6ef601dbe0e5f962bdfe88e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
