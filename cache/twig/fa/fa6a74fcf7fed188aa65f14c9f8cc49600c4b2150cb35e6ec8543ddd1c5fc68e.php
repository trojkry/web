<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/navigation.html.twig */
class __TwigTemplate_d3ed32d3635b56dd78a0855987eeef864edd7dadcbd5ed736efee3d83030b639 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<nav class=\"header-nav ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "scrollappear_enabled", [])) {
            echo "scrollappear";
        }
        echo "\">
  <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "\" class=\"header-logo\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "\" ";
        if (($this->getAttribute(($context["theme_config"] ?? null), "header_font", []) == "cormorant")) {
            echo " style=\"font-family: 'Cormorant Garamond', Courier, serif;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</a>
  <ul class=\"header-links\">

    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 6
            echo "        ";
            $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
            // line 7
            echo "            <li>


                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["active_page"] ?? null), "html", null, true);
            echo "\">
                   ";
            // line 11
            if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "iconmenu", [])) {
                // line 12
                echo "              <i class=\"fa ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", []), "iconmenu", []), "html", null, true);
                echo "\"></i>
              ";
            }
            // line 13
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
            echo "
                </a>
            </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "


    ";
        // line 20
        if (($this->getAttribute(($context["theme_config"] ?? null), "about_enabled", []) == true)) {
            // line 21
            echo "      <li>
        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('relative_url')->getCallable(), ["about"]), "html", null, true);
            echo "\" title=\"About me\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-about\">
  <use href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/about.svg"), "html", null, true);
            echo "#icon-about\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/about.svg"), "html", null, true);
            echo "#icon-about\">
          ";
            // line 25
            $this->loadTemplate("icons/about.svg", "partials/navigation.html.twig", 25)->display($context);
            // line 26
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 31
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_twitter", [])) {
            // line 32
            echo "      <li>
        <a href=\"https://twitter.com/";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_twitter", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Twitter\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-twitter\">
  <use href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/twitter.svg"), "html", null, true);
            echo "#icon-twitter\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/twitter.svg"), "html", null, true);
            echo "#icon-twitter\">
          ";
            // line 36
            $this->loadTemplate("icons/twitter.svg", "partials/navigation.html.twig", 36)->display($context);
            // line 37
            echo "        </use>
    </svg>
        </a>
      </li>

    ";
        }
        // line 43
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_facebook", [])) {
            // line 44
            echo "      <li>
        <a href=\"https://www.facebook.com/";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_facebook", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Facebook\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-facebook\">
  <use href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/facebook.svg"), "html", null, true);
            echo "#icon-facebook\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/facebook.svg"), "html", null, true);
            echo "#icon-facebook\">
          ";
            // line 48
            $this->loadTemplate("icons/facebook.svg", "partials/navigation.html.twig", 48)->display($context);
            // line 49
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 54
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_medium", [])) {
            // line 55
            echo "      <li>
        <a href=\"https://medium.com/";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_medium", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Medium\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-medium\">
  <use href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/medium.svg"), "html", null, true);
            echo "#icon-medium\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/medium.svg"), "html", null, true);
            echo "#icon-medium\">
          ";
            // line 59
            $this->loadTemplate("icons/medium.svg", "partials/navigation.html.twig", 59)->display($context);
            // line 60
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 65
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_github", [])) {
            // line 66
            echo "      <li>
        <a href=\"https://github.com/";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_github", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"GitHub\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-github\">
  <use href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/github.svg"), "html", null, true);
            echo "#icon-github\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/github.svg"), "html", null, true);
            echo "#icon-github\">
          ";
            // line 70
            $this->loadTemplate("icons/github.svg", "partials/navigation.html.twig", 70)->display($context);
            // line 71
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 76
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_gitlab", [])) {
            // line 77
            echo "      <li>
        <a href=\"https://gitlab.com/";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_gitlab", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"GitLab\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-gitlab\">
  <use href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/gitlab.svg"), "html", null, true);
            echo "#icon-gitlab\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/gitlab.svg"), "html", null, true);
            echo "#icon-gitlab\">
          ";
            // line 81
            $this->loadTemplate("icons/gitlab.svg", "partials/navigation.html.twig", 81)->display($context);
            // line 82
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 87
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_bitbucket", [])) {
            // line 88
            echo "      <li>
        <a href=\"https://bitbucket.org/";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_bitbucket", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Bitbucket\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-bitbucket\">
  <use href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/bitbucket.svg"), "html", null, true);
            echo "#icon-bitbucket\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/bitbucket.svg"), "html", null, true);
            echo "#icon-bitbucket\">
          ";
            // line 92
            $this->loadTemplate("icons/bitbucket.svg", "partials/navigation.html.twig", 92)->display($context);
            // line 93
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 98
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_stackoverflow", [])) {
            // line 99
            echo "      <li>
        <a href=\"https://stackoverflow.com/users/";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_stackoverflow", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Stack Overflow\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-stackoverflow\">
  <use href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/stackoverflow.svg"), "html", null, true);
            echo "#icon-stackoverflow\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/stackoverflow.svg"), "html", null, true);
            echo "#icon-stackoverflow\">
          ";
            // line 103
            $this->loadTemplate("icons/stackoverflow.svg", "partials/navigation.html.twig", 103)->display($context);
            // line 104
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 109
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_keybase", [])) {
            // line 110
            echo "      <li>
        <a href=\"https://keybase.io/";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_keybase", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Keybase\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-keybase\">
  <use href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/keybase.svg"), "html", null, true);
            echo "#icon-keybase\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/keybase.svg"), "html", null, true);
            echo "#icon-keybase\">
          ";
            // line 114
            $this->loadTemplate("icons/keybase.svg", "partials/navigation.html.twig", 114)->display($context);
            // line 115
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 120
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_docker", [])) {
            // line 121
            echo "      <li>
        <a href=\"https://hub.docker.com/r/";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_docker", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Docker Hub\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-docker\">
  <use href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/docker.svg"), "html", null, true);
            echo "#icon-docker\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/docker.svg"), "html", null, true);
            echo "#icon-docker\">
          ";
            // line 125
            $this->loadTemplate("icons/docker.svg", "partials/navigation.html.twig", 125)->display($context);
            // line 126
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 131
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_linkedin", [])) {
            // line 132
            echo "      <li>
        <a href=\"https://www.linkedin.com/in/";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_linkedin", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"LinkedIn\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-linkedin\">
  <use href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/linkedin.svg"), "html", null, true);
            echo "#icon-linkedin\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/linkedin.svg"), "html", null, true);
            echo "#icon-linkedin\">
          ";
            // line 136
            $this->loadTemplate("icons/linkedin.svg", "partials/navigation.html.twig", 136)->display($context);
            // line 137
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 142
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_dribbble", [])) {
            // line 143
            echo "      <li>
        <a href=\"https://dribbble.com/";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_dribbble", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Dribbble\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-dribbble\">
  <use href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/dribbble.svg"), "html", null, true);
            echo "#icon-dribbble\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/dribbble.svg"), "html", null, true);
            echo "#icon-dribbble\">
          ";
            // line 147
            $this->loadTemplate("icons/dribbble.svg", "partials/navigation.html.twig", 147)->display($context);
            // line 148
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 153
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_flickr", [])) {
            // line 154
            echo "      <li>
        <a href=\"https://www.flickr.com/photos/";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_flickr", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Flickr\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-flickr\">
  <use href=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/flickr.svg"), "html", null, true);
            echo "#icon-flickr\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/flickr.svg"), "html", null, true);
            echo "#icon-flickr\">
          ";
            // line 158
            $this->loadTemplate("icons/flickr.svg", "partials/navigation.html.twig", 158)->display($context);
            // line 159
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 164
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_instagram", [])) {
            // line 165
            echo "      <li>
        <a href=\"https://instagram.com/";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_instagram", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Instagram\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-instagram\">
  <use href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/instagram.svg"), "html", null, true);
            echo "#icon-instagram\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/instagram.svg"), "html", null, true);
            echo "#icon-instagram\">
          ";
            // line 169
            $this->loadTemplate("icons/instagram.svg", "partials/navigation.html.twig", 169)->display($context);
            // line 170
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 175
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_tumblr", [])) {
            // line 176
            echo "      <li>
        <a href=\"https://";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_tumblr", []), "html", null, true);
            echo ".tumblr.com\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Tumblr\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-tumblr\">
  <use href=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/tumblr.svg"), "html", null, true);
            echo "#icon-tumblr\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/tumblr.svg"), "html", null, true);
            echo "#icon-tumblr\">
          ";
            // line 180
            $this->loadTemplate("icons/tumblr.svg", "partials/navigation.html.twig", 180)->display($context);
            // line 181
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 186
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_spotify", [])) {
            // line 187
            echo "      <li>
        <a href=\"https://play.spotify.com/user/";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_spotify", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Spotify\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-spotify\">
  <use href=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/spotify.svg"), "html", null, true);
            echo "#icon-spotify\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/spotify.svg"), "html", null, true);
            echo "#icon-spotify\">
          ";
            // line 191
            $this->loadTemplate("icons/spotify.svg", "partials/navigation.html.twig", 191)->display($context);
            // line 192
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 197
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_youtube", [])) {
            // line 198
            echo "      <li>
        <a href=\"https://www.youtube.com/user/";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_youtube", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Youtube\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-youtube\">
  <use href=\"";
            // line 201
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/youtube.svg"), "html", null, true);
            echo "#icon-youtube\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/youtube.svg"), "html", null, true);
            echo "#icon-youtube\">
          ";
            // line 202
            $this->loadTemplate("icons/youtube.svg", "partials/navigation.html.twig", 202)->display($context);
            // line 203
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 208
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_twitch", [])) {
            // line 209
            echo "      <li>
        <a href=\"https://www.twitch.tv/";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_twitch", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Twitch\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-twitch\">
  <use href=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/twitch.svg"), "html", null, true);
            echo "#icon-twitch\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/twitch.svg"), "html", null, true);
            echo "#icon-twitch\">
          ";
            // line 213
            $this->loadTemplate("icons/twitch.svg", "partials/navigation.html.twig", 213)->display($context);
            // line 214
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 219
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_steam", [])) {
            // line 220
            echo "      <li>
        <a href=\"https://steamcommunity.com/id/";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_steam", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Steam\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-steam\">
  <use href=\"";
            // line 223
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/steam.svg"), "html", null, true);
            echo "#icon-steam\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/steam.svg"), "html", null, true);
            echo "#icon-steam\">
          ";
            // line 224
            $this->loadTemplate("icons/steam.svg", "partials/navigation.html.twig", 224)->display($context);
            // line 225
            echo "        </use>
    </svg>
        </a>
      </li>
    ";
        }
        // line 230
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_discord", [])) {
            // line 231
            echo "      <li>
        <a href=\"https://discord.gg/";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_discord", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Discord Server\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-discord\">
            <use href=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/discord.svg"), "html", null, true);
            echo "#icon-discord\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/discord.svg"), "html", null, true);
            echo "#icon-discord\">
          ";
            // line 235
            $this->loadTemplate("icons/discord.svg", "partials/navigation.html.twig", 235)->display($context);
            // line 236
            echo "        </a>
      </li>
    ";
        }
        // line 239
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_bitcoin", [])) {
            // line 240
            echo "      <li>
        <a href=\"https://blockexplorer.com/address/";
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_bitcoin", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Bitcoin\">
             <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-bitcoin\">
            <use href=\"";
            // line 243
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/bitcoin.svg"), "html", null, true);
            echo "#icon-bitcoin\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/bitcoin.svg"), "html", null, true);
            echo "#icon-bitcoin\">
          ";
            // line 244
            $this->loadTemplate("icons/bitcoin.svg", "partials/navigation.html.twig", 244)->display($context);
            // line 245
            echo "        </a>
      </li>
    ";
        }
        // line 248
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_ethereum", [])) {
            // line 249
            echo "      <li>
        <a href=\"https://etherscan.io/address/";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_ethereum", []), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Ethereum\">
             <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-ethereum\">
            <use href=\"";
            // line 252
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/ethereum.svg"), "html", null, true);
            echo "#icon-ethereum\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/ethereum.svg"), "html", null, true);
            echo "#icon-ethereum\">
          ";
            // line 253
            $this->loadTemplate("icons/ethereum.svg", "partials/navigation.html.twig", 253)->display($context);
            // line 254
            echo "        </a>
      </li>
    ";
        }
        // line 257
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_email", [])) {
            // line 258
            echo "      <li>
        <a href=\"mailto:";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "social_email", []), "html", null, true);
            echo "\" title=\"Email\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-email\">
            <use href=\"";
            // line 261
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/email.svg"), "html", null, true);
            echo "#icon-email\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/email.svg"), "html", null, true);
            echo "#icon-email\">
          ";
            // line 262
            $this->loadTemplate("icons/email.svg", "partials/navigation.html.twig", 262)->display($context);
            // line 263
            echo "        </a>
      </li>
    ";
        }
        // line 266
        echo "    ";
        if (($this->getAttribute(($context["theme_config"] ?? null), "rss_enabled", []) == true)) {
            // line 267
            echo "      <li>
        <a href=\"";
            // line 268
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('relative_url')->getCallable(), ["feed.xml"]), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"RSS\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-rss\">
            <use href=\"";
            // line 270
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/rss.svg"), "html", null, true);
            echo "#icon-rss\" xlink:href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://templates/icons/rss.svg"), "html", null, true);
            echo "#icon-rss\">
          ";
            // line 271
            $this->loadTemplate("icons/rss.svg", "partials/navigation.html.twig", 271)->display($context);
            // line 272
            echo "        </a>
      </li>
    ";
        }
        // line 275
        echo "  </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  707 => 275,  702 => 272,  700 => 271,  694 => 270,  689 => 268,  686 => 267,  683 => 266,  678 => 263,  676 => 262,  670 => 261,  665 => 259,  662 => 258,  659 => 257,  654 => 254,  652 => 253,  646 => 252,  641 => 250,  638 => 249,  635 => 248,  630 => 245,  628 => 244,  622 => 243,  617 => 241,  614 => 240,  611 => 239,  606 => 236,  604 => 235,  598 => 234,  593 => 232,  590 => 231,  587 => 230,  580 => 225,  578 => 224,  572 => 223,  567 => 221,  564 => 220,  561 => 219,  554 => 214,  552 => 213,  546 => 212,  541 => 210,  538 => 209,  535 => 208,  528 => 203,  526 => 202,  520 => 201,  515 => 199,  512 => 198,  509 => 197,  502 => 192,  500 => 191,  494 => 190,  489 => 188,  486 => 187,  483 => 186,  476 => 181,  474 => 180,  468 => 179,  463 => 177,  460 => 176,  457 => 175,  450 => 170,  448 => 169,  442 => 168,  437 => 166,  434 => 165,  431 => 164,  424 => 159,  422 => 158,  416 => 157,  411 => 155,  408 => 154,  405 => 153,  398 => 148,  396 => 147,  390 => 146,  385 => 144,  382 => 143,  379 => 142,  372 => 137,  370 => 136,  364 => 135,  359 => 133,  356 => 132,  353 => 131,  346 => 126,  344 => 125,  338 => 124,  333 => 122,  330 => 121,  327 => 120,  320 => 115,  318 => 114,  312 => 113,  307 => 111,  304 => 110,  301 => 109,  294 => 104,  292 => 103,  286 => 102,  281 => 100,  278 => 99,  275 => 98,  268 => 93,  266 => 92,  260 => 91,  255 => 89,  252 => 88,  249 => 87,  242 => 82,  240 => 81,  234 => 80,  229 => 78,  226 => 77,  223 => 76,  216 => 71,  214 => 70,  208 => 69,  203 => 67,  200 => 66,  197 => 65,  190 => 60,  188 => 59,  182 => 58,  177 => 56,  174 => 55,  171 => 54,  164 => 49,  162 => 48,  156 => 47,  151 => 45,  148 => 44,  145 => 43,  137 => 37,  135 => 36,  129 => 35,  124 => 33,  121 => 32,  118 => 31,  111 => 26,  109 => 25,  103 => 24,  98 => 22,  95 => 21,  93 => 20,  88 => 17,  77 => 13,  71 => 12,  69 => 11,  63 => 10,  58 => 7,  55 => 6,  51 => 5,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"header-nav {% if theme_config.scrollappear_enabled %}scrollappear{% endif %}\">
  <a href=\"{{ home_url }}\" class=\"header-logo\" title=\"{{ site.title }}\" {% if theme_config.header_font == \"cormorant\" %} style=\"font-family: 'Cormorant Garamond', Courier, serif;\"{% endif %}>{{ site.title }}</a>
  <ul class=\"header-links\">

    {% for p in pages.children.visible %}
        {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
            <li>


                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                   {% if p.header.iconmenu %}
              <i class=\"fa {{p.header.iconmenu }}\"></i>
              {% endif %} {{ p.menu }}
                </a>
            </li>
    {% endfor %}



    {% if theme_config.about_enabled == true %}
      <li>
        <a href=\"{{ 'about' | relative_url }}\" title=\"About me\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-about\">
  <use href=\"{{url('theme://templates/icons/about.svg')}}#icon-about\" xlink:href=\"{{url('theme://templates/icons/about.svg')}}#icon-about\">
          {% include 'icons/about.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_twitter %}
      <li>
        <a href=\"https://twitter.com/{{ theme_config.social_twitter }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Twitter\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-twitter\">
  <use href=\"{{url('theme://templates/icons/twitter.svg')}}#icon-twitter\" xlink:href=\"{{url('theme://templates/icons/twitter.svg')}}#icon-twitter\">
          {% include 'icons/twitter.svg' %}
        </use>
    </svg>
        </a>
      </li>

    {% endif %}
    {% if theme_config.social_facebook %}
      <li>
        <a href=\"https://www.facebook.com/{{ theme_config.social_facebook }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Facebook\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-facebook\">
  <use href=\"{{url('theme://templates/icons/facebook.svg')}}#icon-facebook\" xlink:href=\"{{url('theme://templates/icons/facebook.svg')}}#icon-facebook\">
          {% include 'icons/facebook.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_medium %}
      <li>
        <a href=\"https://medium.com/{{ theme_config.social_medium }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Medium\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-medium\">
  <use href=\"{{url('theme://templates/icons/medium.svg')}}#icon-medium\" xlink:href=\"{{url('theme://templates/icons/medium.svg')}}#icon-medium\">
          {% include 'icons/medium.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_github %}
      <li>
        <a href=\"https://github.com/{{ theme_config.social_github }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"GitHub\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-github\">
  <use href=\"{{url('theme://templates/icons/github.svg')}}#icon-github\" xlink:href=\"{{url('theme://templates/icons/github.svg')}}#icon-github\">
          {% include 'icons/github.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_gitlab %}
      <li>
        <a href=\"https://gitlab.com/{{ theme_config.social_gitlab }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"GitLab\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-gitlab\">
  <use href=\"{{url('theme://templates/icons/gitlab.svg')}}#icon-gitlab\" xlink:href=\"{{url('theme://templates/icons/gitlab.svg')}}#icon-gitlab\">
          {% include 'icons/gitlab.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_bitbucket %}
      <li>
        <a href=\"https://bitbucket.org/{{ theme_config.social_bitbucket }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Bitbucket\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-bitbucket\">
  <use href=\"{{url('theme://templates/icons/bitbucket.svg')}}#icon-bitbucket\" xlink:href=\"{{url('theme://templates/icons/bitbucket.svg')}}#icon-bitbucket\">
          {% include 'icons/bitbucket.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_stackoverflow %}
      <li>
        <a href=\"https://stackoverflow.com/users/{{ theme_config.social_stackoverflow }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Stack Overflow\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-stackoverflow\">
  <use href=\"{{url('theme://templates/icons/stackoverflow.svg')}}#icon-stackoverflow\" xlink:href=\"{{url('theme://templates/icons/stackoverflow.svg')}}#icon-stackoverflow\">
          {% include 'icons/stackoverflow.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_keybase %}
      <li>
        <a href=\"https://keybase.io/{{ theme_config.social_keybase }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Keybase\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-keybase\">
  <use href=\"{{url('theme://templates/icons/keybase.svg')}}#icon-keybase\" xlink:href=\"{{url('theme://templates/icons/keybase.svg')}}#icon-keybase\">
          {% include 'icons/keybase.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_docker %}
      <li>
        <a href=\"https://hub.docker.com/r/{{ theme_config.social_docker }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Docker Hub\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-docker\">
  <use href=\"{{url('theme://templates/icons/docker.svg')}}#icon-docker\" xlink:href=\"{{url('theme://templates/icons/docker.svg')}}#icon-docker\">
          {% include 'icons/docker.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_linkedin %}
      <li>
        <a href=\"https://www.linkedin.com/in/{{ theme_config.social_linkedin }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"LinkedIn\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-linkedin\">
  <use href=\"{{url('theme://templates/icons/linkedin.svg')}}#icon-linkedin\" xlink:href=\"{{url('theme://templates/icons/linkedin.svg')}}#icon-linkedin\">
          {% include 'icons/linkedin.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_dribbble %}
      <li>
        <a href=\"https://dribbble.com/{{ theme_config.social_dribbble }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Dribbble\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-dribbble\">
  <use href=\"{{url('theme://templates/icons/dribbble.svg')}}#icon-dribbble\" xlink:href=\"{{url('theme://templates/icons/dribbble.svg')}}#icon-dribbble\">
          {% include 'icons/dribbble.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_flickr %}
      <li>
        <a href=\"https://www.flickr.com/photos/{{ theme_config.social_flickr }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Flickr\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-flickr\">
  <use href=\"{{url('theme://templates/icons/flickr.svg')}}#icon-flickr\" xlink:href=\"{{url('theme://templates/icons/flickr.svg')}}#icon-flickr\">
          {% include 'icons/flickr.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_instagram %}
      <li>
        <a href=\"https://instagram.com/{{ theme_config.social_instagram }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Instagram\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-instagram\">
  <use href=\"{{url('theme://templates/icons/instagram.svg')}}#icon-instagram\" xlink:href=\"{{url('theme://templates/icons/instagram.svg')}}#icon-instagram\">
          {% include 'icons/instagram.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_tumblr %}
      <li>
        <a href=\"https://{{ theme_config.social_tumblr }}.tumblr.com\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Tumblr\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-tumblr\">
  <use href=\"{{url('theme://templates/icons/tumblr.svg')}}#icon-tumblr\" xlink:href=\"{{url('theme://templates/icons/tumblr.svg')}}#icon-tumblr\">
          {% include 'icons/tumblr.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_spotify %}
      <li>
        <a href=\"https://play.spotify.com/user/{{ theme_config.social_spotify }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Spotify\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-spotify\">
  <use href=\"{{url('theme://templates/icons/spotify.svg')}}#icon-spotify\" xlink:href=\"{{url('theme://templates/icons/spotify.svg')}}#icon-spotify\">
          {% include 'icons/spotify.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_youtube %}
      <li>
        <a href=\"https://www.youtube.com/user/{{ theme_config.social_youtube }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Youtube\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-youtube\">
  <use href=\"{{url('theme://templates/icons/youtube.svg')}}#icon-youtube\" xlink:href=\"{{url('theme://templates/icons/youtube.svg')}}#icon-youtube\">
          {% include 'icons/youtube.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_twitch %}
      <li>
        <a href=\"https://www.twitch.tv/{{ theme_config.social_twitch }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Twitch\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-twitch\">
  <use href=\"{{url('theme://templates/icons/twitch.svg')}}#icon-twitch\" xlink:href=\"{{url('theme://templates/icons/twitch.svg')}}#icon-twitch\">
          {% include 'icons/twitch.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_steam %}
      <li>
        <a href=\"https://steamcommunity.com/id/{{ theme_config.social_steam }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Steam\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-steam\">
  <use href=\"{{url('theme://templates/icons/steam.svg')}}#icon-steam\" xlink:href=\"{{url('theme://templates/icons/steam.svg')}}#icon-steam\">
          {% include 'icons/steam.svg' %}
        </use>
    </svg>
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_discord %}
      <li>
        <a href=\"https://discord.gg/{{ theme_config.social_discord }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Discord Server\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-discord\">
            <use href=\"{{url('theme://templates/icons/discord.svg')}}#icon-discord\" xlink:href=\"{{url('theme://templates/icons/discord.svg')}}#icon-discord\">
          {% include 'icons/discord.svg' %}
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_bitcoin %}
      <li>
        <a href=\"https://blockexplorer.com/address/{{ theme_config.social_bitcoin }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Bitcoin\">
             <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-bitcoin\">
            <use href=\"{{url('theme://templates/icons/bitcoin.svg')}}#icon-bitcoin\" xlink:href=\"{{url('theme://templates/icons/bitcoin.svg')}}#icon-bitcoin\">
          {% include 'icons/bitcoin.svg' %}
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_ethereum %}
      <li>
        <a href=\"https://etherscan.io/address/{{ theme_config.social_ethereum }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"Ethereum\">
             <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-ethereum\">
            <use href=\"{{url('theme://templates/icons/ethereum.svg')}}#icon-ethereum\" xlink:href=\"{{url('theme://templates/icons/ethereum.svg')}}#icon-ethereum\">
          {% include 'icons/ethereum.svg' %}
        </a>
      </li>
    {% endif %}
    {% if theme_config.social_email %}
      <li>
        <a href=\"mailto:{{ theme_config.social_email }}\" title=\"Email\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-email\">
            <use href=\"{{url('theme://templates/icons/email.svg')}}#icon-email\" xlink:href=\"{{url('theme://templates/icons/email.svg')}}#icon-email\">
          {% include 'icons/email.svg' %}
        </a>
      </li>
    {% endif %}
    {% if theme_config.rss_enabled == true %}
      <li>
        <a href=\"{{ 'feed.xml' | relative_url }}\" rel=\"noreferrer noopener\" target=\"_blank\" title=\"RSS\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-rss\">
            <use href=\"{{url('theme://templates/icons/rss.svg')}}#icon-rss\" xlink:href=\"{{url('theme://templates/icons/rss.svg')}}#icon-rss\">
          {% include 'icons/rss.svg' %}
        </a>
      </li>
    {% endif %}
  </ul>
</nav>
", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\grav-admin-v1.7.43\\grav-admin\\user\\themes\\chalk\\templates\\partials\\navigation.html.twig");
    }
}
