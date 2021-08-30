import gsap from 'gsap'
import { CSSPlugin, ScrollToPlugin } from 'gsap/all'
import MorphSVGPlugin from 'vendor/morphsvg'

const plugins = [CSSPlugin, MorphSVGPlugin, ScrollToPlugin]

import Ripple from 'mixins/ripple'
import ProductHeader from 'layout/header'
import ProductSandwich from 'layout/sandwich'
import ProductSliderInstagram from 'layout/slider/instagram'
import ProductSliderHero from 'product/slider/hero'
import ProductSliderShowcase from 'product/slider/showcase'

new Ripple
