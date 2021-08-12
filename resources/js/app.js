import gsap from 'gsap'
import { CSSPlugin, ScrollToPlugin, Sine, TweenMax } from 'gsap/all'
import MorphSVGPlugin from 'vendor/morph'

const plugins = [CSSPlugin, MorphSVGPlugin, ScrollToPlugin]

import Ripple from 'mixins/ripple'
import SliderHero from 'partials/slider/hero'
import Sandwich from 'partials/sandwich'

new Ripple
