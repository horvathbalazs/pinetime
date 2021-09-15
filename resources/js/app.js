import gsap from 'gsap'
import { CSSPlugin, ScrollToPlugin } from 'gsap/all'
import MorphSVGPlugin from 'vendor/morphsvg'

if (MorphSVGPlugin) {
    const plugins = [CSSPlugin, MorphSVGPlugin, ScrollToPlugin]
}

import Ripple from 'mixins/ripple'
import Theme from 'mixins/theme'

import LayoutHeader from 'layout/header'
import LayoutSandwich from 'layout/sandwich'
import LayoutSliderInstagram from 'layout/slider/instagram'

import ProductSizing from 'product/sizing'
import ProductSliderGallery from 'product/slider/gallery'
import ProductSliderHero from 'product/slider/hero'
import ProductSliderShowcase from 'product/slider/showcase'

new Ripple

if (Theme.includes('product') && !Theme.includes('partial')) {
    new ProductSizing
}
