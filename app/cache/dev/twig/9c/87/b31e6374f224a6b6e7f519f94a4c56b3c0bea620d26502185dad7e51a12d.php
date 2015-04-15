<?php

/* QcmQcmBundle:Default:index.html.twig */
class __TwigTemplate_9c87b31e6374f224a6b6e7f519f94a4c56b3c0bea620d26502185dad7e51a12d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <nav class=\"navbar\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#qcm\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"QCM Online\" style=\"height:40px;\"></a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"qcm\">
                <form class=\"navbar-form navbar-right\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Email Address\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">login</button>
                </form>
            </div>
        </div>
    </nav>
    <div class=\"content\">
        <div class=\"container\">
            <div class=\"col-sm-7\">
                <div class=\"bg-t\">
                    <h1 class=\"text-center\">Welcome to QCM</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    <ul class=\"list-unstyled\">
                        <li>
                            <h3><i class=\"fa fa-check-square-o\"></i> Modern and responsive.</h3>
                        </li>
                        <li>
                            <h3><i class=\"fa fa-check-square-o\"></i> Simple and clean.</h3>
                        </li>
                        <li>
                            <h3><i class=\"fa fa-check-square-o\"></i> Easy to customize.</h3>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-5 bg-t\">
                <form action=\"#\" class=\"sign-up-form\">
                    <div class=\"sign-up\">
                        <h3>Sign Up</h3>
                        <p>It’s free and always will be.</p>
                        <input placeholder=\"Email Address\" type=\"email\">
                        <input placeholder=\"Password\" type=\"password\">
                        <input placeholder=\"Confirm Password\" type=\"password\">
                        <p style=\"font-size: 11px;\">By clicking Sign Up, you agree to our <a href=\"#\">Terms</a> and that you have read our <a href=\"#\">Data Policy</a>, including our <a href=\"#\">Cookie Use</a>.</p>
                        <button class=\"btn-sign-up\">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "QcmQcmBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  39 => 4,  36 => 3,  11 => 1,);
    }
}
