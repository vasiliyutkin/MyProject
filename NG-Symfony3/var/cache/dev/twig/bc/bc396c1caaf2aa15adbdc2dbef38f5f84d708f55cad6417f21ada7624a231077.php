<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7e0a8725d908519e3cd5b06ab3cb57d654f4d1db268a0d612f8a8625ce46bc44 extends Twig_Template
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
        $__internal_d866a392839ae5b71c4e0381da2fa457ff01e3eacb117238a22e6c19b36d6ef0 = $this->env->getExtension("native_profiler");
        $__internal_d866a392839ae5b71c4e0381da2fa457ff01e3eacb117238a22e6c19b36d6ef0->enter($__internal_d866a392839ae5b71c4e0381da2fa457ff01e3eacb117238a22e6c19b36d6ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d866a392839ae5b71c4e0381da2fa457ff01e3eacb117238a22e6c19b36d6ef0->leave($__internal_d866a392839ae5b71c4e0381da2fa457ff01e3eacb117238a22e6c19b36d6ef0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */