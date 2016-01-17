<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_b3aba5600ed03543a2bc22ae0dfbda0c1481c968b104c5fc22d8c2e65c5ec2b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle::base.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'header_nav' => array($this, 'block_header_nav'),
            'content' => array($this, 'block_content'),
            'powered' => array($this, 'block_powered'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0b253b4fe642ee58937f40f78a5531ea0e5236819a1f1962d143afab20e635e = $this->env->getExtension("native_profiler");
        $__internal_a0b253b4fe642ee58937f40f78a5531ea0e5236819a1f1962d143afab20e635e->enter($__internal_a0b253b4fe642ee58937f40f78a5531ea0e5236819a1f1962d143afab20e635e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0b253b4fe642ee58937f40f78a5531ea0e5236819a1f1962d143afab20e635e->leave($__internal_a0b253b4fe642ee58937f40f78a5531ea0e5236819a1f1962d143afab20e635e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_88cc53818e32c13776bec85832f096453437c76a011d26c8fd05697518828b58 = $this->env->getExtension("native_profiler");
        $__internal_88cc53818e32c13776bec85832f096453437c76a011d26c8fd05697518828b58->enter($__internal_88cc53818e32c13776bec85832f096453437c76a011d26c8fd05697518828b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/normalize.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/animate.min.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
\t";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3e7b5a2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e7b5a2_part_1_styles_1.css");
            // line 8
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
            // asset "3e7b5a2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e7b5a2_part_1_styles.css_2.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "3e7b5a2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3e7b5a2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/3e7b5a2.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        
        $__internal_88cc53818e32c13776bec85832f096453437c76a011d26c8fd05697518828b58->leave($__internal_88cc53818e32c13776bec85832f096453437c76a011d26c8fd05697518828b58_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3aeba9f3b8ad6caa2fcd57a94303c510a684d4e00fb44d06e8316d0f1816820 = $this->env->getExtension("native_profiler");
        $__internal_c3aeba9f3b8ad6caa2fcd57a94303c510a684d4e00fb44d06e8316d0f1816820->enter($__internal_c3aeba9f3b8ad6caa2fcd57a94303c510a684d4e00fb44d06e8316d0f1816820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/require.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/angular.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/angular-route.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("lib/scripts/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
\t";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bb54fd1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1_part_1_init_1.js");
            // line 20
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "bb54fd1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        
        $__internal_c3aeba9f3b8ad6caa2fcd57a94303c510a684d4e00fb44d06e8316d0f1816820->leave($__internal_c3aeba9f3b8ad6caa2fcd57a94303c510a684d4e00fb44d06e8316d0f1816820_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_f273827e67c3ca90ccd8e94becb2e1c6f53b4941fdfd7beb9d5e506e05816b09 = $this->env->getExtension("native_profiler");
        $__internal_f273827e67c3ca90ccd8e94becb2e1c6f53b4941fdfd7beb9d5e506e05816b09->enter($__internal_f273827e67c3ca90ccd8e94becb2e1c6f53b4941fdfd7beb9d5e506e05816b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "\t<div id=\"wrapper\">
    <header>
    ";
        // line 27
        $this->displayBlock('header_nav', $context, $blocks);
        // line 55
        echo "\t\t</header>

\t\t<section id=\"content\">
      <br>
\t\t\t";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "\t\t</section>

\t\t<footer>
      ";
        // line 63
        $this->displayBlock('powered', $context, $blocks);
        // line 80
        echo "\t\t</footer>
\t</div>
";
        
        $__internal_f273827e67c3ca90ccd8e94becb2e1c6f53b4941fdfd7beb9d5e506e05816b09->leave($__internal_f273827e67c3ca90ccd8e94becb2e1c6f53b4941fdfd7beb9d5e506e05816b09_prof);

    }

    // line 27
    public function block_header_nav($context, array $blocks = array())
    {
        $__internal_0b5d5f354cee767d73952de1f7ade2879afd6d0e009e4796dba74b4b65fd68ad = $this->env->getExtension("native_profiler");
        $__internal_0b5d5f354cee767d73952de1f7ade2879afd6d0e009e4796dba74b4b65fd68ad->enter($__internal_0b5d5f354cee767d73952de1f7ade2879afd6d0e009e4796dba74b4b65fd68ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_nav"));

        // line 28
        echo "    <nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav\">
          <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("_home");
        echo "\">Home</a>
          </li>
          <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("_about");
        echo "\">About</a>
          </li>
          <li>
              <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("_description");
        echo "\">Description</a>
          </li>
        </ul>
        <form class=\"navbar-form navbar-right\">
          <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Login\">
          </div>
          <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"password\">
          </div>
          <button type=\"submit\" class=\"btn btn-default\">Authorize</button>
        </form>
      </div>
    </div>
  </nav>
    ";
        
        $__internal_0b5d5f354cee767d73952de1f7ade2879afd6d0e009e4796dba74b4b65fd68ad->leave($__internal_0b5d5f354cee767d73952de1f7ade2879afd6d0e009e4796dba74b4b65fd68ad_prof);

    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
        $__internal_68dab0c3ddac230befbb9ea5499577d3f52dbd8630c7066911ebe53eb3fdfb08 = $this->env->getExtension("native_profiler");
        $__internal_68dab0c3ddac230befbb9ea5499577d3f52dbd8630c7066911ebe53eb3fdfb08->enter($__internal_68dab0c3ddac230befbb9ea5499577d3f52dbd8630c7066911ebe53eb3fdfb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_68dab0c3ddac230befbb9ea5499577d3f52dbd8630c7066911ebe53eb3fdfb08->leave($__internal_68dab0c3ddac230befbb9ea5499577d3f52dbd8630c7066911ebe53eb3fdfb08_prof);

    }

    // line 63
    public function block_powered($context, array $blocks = array())
    {
        $__internal_fe2dc3cb7ce4c85dc1fc104cf3da0912c975c43b41095f7ce3c4c506744ef8f9 = $this->env->getExtension("native_profiler");
        $__internal_fe2dc3cb7ce4c85dc1fc104cf3da0912c975c43b41095f7ce3c4c506744ef8f9->enter($__internal_fe2dc3cb7ce4c85dc1fc104cf3da0912c975c43b41095f7ce3c4c506744ef8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "powered"));

        // line 64
        echo "      <div class=\"powered-text\">
        <h3>Powered by <span style='color: #fafafa; text-transform: capitalize; border-bottom: 2px solid #a55;'>Andrew Blinoff</span> on listed Technlogies &darr;</h3>
      </div>
          <div id='powered-by'>
            <div class='powered-item'><img style=\"height: 50px; height: 50px;\" alt=\"Brand\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/powered/ng.png"), "html", null, true);
        echo "\"></div>
            <div class='powered-item'><img style=\"height: 50px; height: 50px;\" alt=\"Brand\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/powered/html.svg"), "html", null, true);
        echo "\"></div>
            <div class='powered-item'><img style=\"height: 50px; height: 50px;\" alt=\"Brand\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/powered/css.png"), "html", null, true);
        echo "\"></div>
            <div class='powered-item'><img style=\"width: 50px; height: 50px;\" alt=\"Brand\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/powered/sf.png"), "html", null, true);
        echo "\"></div>
            <div class='powered-item'><img style=\"width: 50px; height: 50px;\" alt=\"Brand\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/powered/sql.png"), "html", null, true);
        echo "\"></div>
            <div class='powered-item'><img style=\"height: 50px; height: 50px;\" alt=\"Brand\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/powered/unity.png"), "html", null, true);
        echo "\"></div>
            <div class='powered-item'><img style=\"height: 50px; height: 50px;\" alt=\"Brand\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/powered/gulp.png"), "html", null, true);
        echo "\"></div>
          </div>
        <div class='feedback'>
          <p>You could leave feedback to me on <a style='color: #d3c0d3;' href=\"http://vk.com/and1_ray\" target='_blank'>Vk</a> &rArr; <a style='color: #d3c0d3;' href=\"https://www.facebook.com/andrey.blinov.33\" target='_blank'>Fb</a> &rArr; <a style='color: #d3c0d3;' href=\"https://github.com/vasiliyutkin\" target='_blank'>Github</a></p>
        </div>
      ";
        
        $__internal_fe2dc3cb7ce4c85dc1fc104cf3da0912c975c43b41095f7ce3c4c506744ef8f9->leave($__internal_fe2dc3cb7ce4c85dc1fc104cf3da0912c975c43b41095f7ce3c4c506744ef8f9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 74,  268 => 73,  264 => 72,  260 => 71,  256 => 70,  252 => 69,  248 => 68,  242 => 64,  236 => 63,  225 => 59,  202 => 39,  196 => 36,  190 => 33,  183 => 28,  177 => 27,  168 => 80,  166 => 63,  161 => 60,  159 => 59,  153 => 55,  151 => 27,  147 => 25,  141 => 24,  122 => 20,  118 => 19,  114 => 18,  110 => 17,  106 => 16,  102 => 15,  98 => 14,  93 => 13,  87 => 12,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{ asset('lib/css/normalize.css') }}"/>*/
/* 	<link rel="stylesheet" href="{{ asset('lib/css/animate.min.css') }}"/>*/
/* 	<link rel="stylesheet" href="{{ asset('lib/css/bootstrap.min.css') }}"/>*/
/* 	{% stylesheets '@AppBundle/Resources/public/css/*' filter='cssrewrite' %}*/
/* 	<link rel="stylesheet" href="{{ asset_url }}" />*/
/* 	{% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	<script src="{{ asset('lib/scripts/require.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/jquery.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/angular.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/angular-route.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/bootstrap.min.js') }}"></script>*/
/* 	<script src="{{ asset('lib/scripts/html5shiv.min.js') }}"></script>*/
/* 	{% javascripts '@AppBundle/Resources/public/js/*' %}*/
/* 	<script src="{{ asset_url }}"></script>*/
/* 	{% endjavascripts %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div id="wrapper">*/
/*     <header>*/
/*     {% block header_nav %}*/
/*     <nav class="navbar navbar-inverse">*/
/*     <div class="container-fluid">*/
/*       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*         <ul class="nav navbar-nav">*/
/*           <li>*/
/*             <a href="{{ path('_home') }}">Home</a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="{{ path('_about') }}">About</a>*/
/*           </li>*/
/*           <li>*/
/*               <a href="{{ path('_description') }}">Description</a>*/
/*           </li>*/
/*         </ul>*/
/*         <form class="navbar-form navbar-right">*/
/*           <div class="form-group">*/
/*             <input type="text" class="form-control" placeholder="Login">*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <input type="text" class="form-control" placeholder="password">*/
/*           </div>*/
/*           <button type="submit" class="btn btn-default">Authorize</button>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </nav>*/
/*     {% endblock %}*/
/* 		</header>*/
/* */
/* 		<section id="content">*/
/*       <br>*/
/* 			{% block content %}{% endblock %}*/
/* 		</section>*/
/* */
/* 		<footer>*/
/*       {% block powered %}*/
/*       <div class="powered-text">*/
/*         <h3>Powered by <span style='color: #fafafa; text-transform: capitalize; border-bottom: 2px solid #a55;'>Andrew Blinoff</span> on listed Technlogies &darr;</h3>*/
/*       </div>*/
/*           <div id='powered-by'>*/
/*             <div class='powered-item'><img style="height: 50px; height: 50px;" alt="Brand" src="{{asset('images/powered/ng.png')}}"></div>*/
/*             <div class='powered-item'><img style="height: 50px; height: 50px;" alt="Brand" src="{{asset('images/powered/html.svg')}}"></div>*/
/*             <div class='powered-item'><img style="height: 50px; height: 50px;" alt="Brand" src="{{asset('images/powered/css.png')}}"></div>*/
/*             <div class='powered-item'><img style="width: 50px; height: 50px;" alt="Brand" src="{{asset('images/powered/sf.png')}}"></div>*/
/*             <div class='powered-item'><img style="width: 50px; height: 50px;" alt="Brand" src="{{asset('images/powered/sql.png')}}"></div>*/
/*             <div class='powered-item'><img style="height: 50px; height: 50px;" alt="Brand" src="{{asset('images/powered/unity.png')}}"></div>*/
/*             <div class='powered-item'><img style="height: 50px; height: 50px;" alt="Brand" src="{{asset('images/powered/gulp.png')}}"></div>*/
/*           </div>*/
/*         <div class='feedback'>*/
/*           <p>You could leave feedback to me on <a style='color: #d3c0d3;' href="http://vk.com/and1_ray" target='_blank'>Vk</a> &rArr; <a style='color: #d3c0d3;' href="https://www.facebook.com/andrey.blinov.33" target='_blank'>Fb</a> &rArr; <a style='color: #d3c0d3;' href="https://github.com/vasiliyutkin" target='_blank'>Github</a></p>*/
/*         </div>*/
/*       {% endblock %}*/
/* 		</footer>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
