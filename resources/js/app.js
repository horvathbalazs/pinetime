import gsap from 'gsap'
import { CSSPlugin, ScrollToPlugin } from 'gsap/all'
import MorphSVGPlugin from 'vendor/morphsvg'

const plugins = [CSSPlugin, MorphSVGPlugin, ScrollToPlugin]

import Ripple from 'mixins/ripple'
import ProductHeader from 'product/partials/header'
import ProductSandwich from 'product/partials/sandwich'
import ProductSliderHero from 'product/partials/slider/hero'
import ProductSliderInstagram from 'product/partials/slider/instagram'
import ProductSliderShowcase from 'product/partials/slider/showcase'

new Ripple
