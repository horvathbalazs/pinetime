import gsap from 'gsap'
import { CSSPlugin, ScrollToPlugin } from 'gsap/all'
import MorphSVGPlugin from 'vendor/morphsvg'

const plugins = [CSSPlugin, MorphSVGPlugin, ScrollToPlugin]

import Ripple from 'mixins/ripple'
import Header from 'partials/header'
import Sandwich from 'partials/sandwich'
import SliderHero from 'partials/slider/hero'
import SliderInstagram from 'partials/slider/instagram'
import SliderShowcase from 'partials/slider/showcase'

new Ripple
