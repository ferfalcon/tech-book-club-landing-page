---
name: Technical Narrative
colors:
  surface: '#faf9fa'
  surface-dim: '#dadada'
  surface-bright: '#faf9fa'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f4f3f4'
  surface-container: '#eeedee'
  surface-container-high: '#e9e8e8'
  surface-container-highest: '#e3e2e3'
  on-surface: '#1a1c1c'
  on-surface-variant: '#42484a'
  inverse-surface: '#2f3031'
  inverse-on-surface: '#f1f0f1'
  outline: '#72787b'
  outline-variant: '#c2c7cb'
  surface-tint: '#46626e'
  primary: '#000f15'
  on-primary: '#ffffff'
  primary-container: '#062630'
  on-primary-container: '#728e9a'
  inverse-primary: '#aecbd8'
  secondary: '#914b1f'
  on-secondary: '#ffffff'
  secondary-container: '#fea36f'
  on-secondary-container: '#77370b'
  tertiary: '#180800'
  on-tertiary: '#ffffff'
  tertiary-container: '#341d07'
  on-tertiary-container: '#a78365'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#c9e7f5'
  primary-fixed-dim: '#aecbd8'
  on-primary-fixed: '#001f28'
  on-primary-fixed-variant: '#2f4b55'
  secondary-fixed: '#ffdbca'
  secondary-fixed-dim: '#ffb68e'
  on-secondary-fixed: '#331200'
  on-secondary-fixed-variant: '#743508'
  tertiary-fixed: '#ffdcc1'
  tertiary-fixed-dim: '#e8bf9e'
  on-tertiary-fixed: '#2c1603'
  on-tertiary-fixed-variant: '#5d4128'
  background: '#faf9fa'
  on-background: '#1a1c1c'
  surface-variant: '#e3e2e3'
typography:
  display-lg:
    fontFamily: Martian Mono
    fontSize: 62px
    fontWeight: '700'
    lineHeight: '1.2'
    letterSpacing: -2px
  display-lg-mobile:
    fontFamily: Martian Mono
    fontSize: 38px
    fontWeight: '700'
    lineHeight: '1.2'
    letterSpacing: -2px
  headline-md:
    fontFamily: Martian Mono
    fontSize: 50px
    fontWeight: '600'
    lineHeight: '1.3'
    letterSpacing: -2px
  headline-md-mobile:
    fontFamily: Martian Mono
    fontSize: 34px
    fontWeight: '600'
    lineHeight: '1.3'
    letterSpacing: -2px
  title-lg:
    fontFamily: Martian Mono
    fontSize: 34px
    fontWeight: '600'
    lineHeight: '1.3'
    letterSpacing: -1px
  body-lg:
    fontFamily: Inter
    fontSize: 20px
    fontWeight: '400'
    lineHeight: '1.4'
    letterSpacing: -0.5px
  body-sm:
    fontFamily: Martian Mono
    fontSize: 14px
    fontWeight: '400'
    lineHeight: '1.2'
    letterSpacing: -1px
  ui-label:
    fontFamily: Martian Mono
    fontSize: 18px
    fontWeight: '600'
    lineHeight: '1.3'
    letterSpacing: -1px
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  '025': 2px
  '050': 4px
  '075': 6px
  '100': 8px
  '150': 12px
  '200': 16px
  '250': 20px
  '300': 24px
  '400': 32px
  '500': 40px
  '600': 48px
  '800': 64px
  '1000': 80px
---

## Brand & Style

This design system is built for a developer-centric community, blending the precision of technical documentation with a warm, communal atmosphere. The aesthetic is **Corporate Modern with a "Dev-Tool" twist**, utilizing monospaced typography and grid-based patterns to evoke a coding environment while using a soft "Light Salmon" palette to maintain approachability.

Key brand attributes:
- **Technical yet Social:** Structured layouts balanced with organic, hand-drawn vector accents (loops and arrows).
- **Precision:** Heavy reliance on a mathematical spacing scale and fixed border-radius increments.
- **Developer Familiarity:** Use of monospaced fonts for headings and UI controls mimics the look of a code editor.

## Colors

The palette is anchored by a deep, technical teal-black (**Neutral 900**) and a warm, inviting **Light Salmon**. 

- **Primary Identity:** Neutral 900 is used for primary text and high-contrast backgrounds (footers/headers).
- **Action & Accent:** Light Salmon 500 is the primary action color, used for secondary headings and highlights.
- **Tonal Layering:** Use Salmon 50 and 100 for subtle card backgrounds or "glow" effects to differentiate sections from the pure white or off-white background.
- **Typography:** Headlines frequently use the "Text Gradient" to bridge the gap between the technical primary and the warm accent.

## Typography

This system uses a dual-font strategy:
- **Martian Mono:** Applied to all headings, buttons, labels, and numeric data. It reinforces the technical, developer-centric brand narrative.
- **Inter:** Used exclusively for multi-line body copy and descriptions to ensure high readability and a clean, modern feel.

**Scaling:** Large displays should aggressively use negative letter-spacing (-1px to -2px) to keep the monospaced characters feeling cohesive and tight in headline settings.

## Layout & Spacing

The design system follows a **fluid-to-fixed grid model**. 
- **The Grid:** A subtle grid pattern (Neutral 200/100) is used as a background element to emphasize the "work-in-progress" or "technical blueprint" feel.
- **Spacing Philosophy:** All margins and paddings must derive from the defined spacing scale. 
- **Desktop Layout:** 12-column grid with `spacing-300` gutters.
- **Mobile Layout:** Single column with `spacing-200` gutters and `spacing-300` horizontal margins.

## Elevation & Depth

Hierarchy is established through **structural layering and outlines** rather than heavy shadows.

- **Outlines:** Primary depth is created with 1px borders using Neutral 900.
- **Tonal Depth:** Surfaces use the "Surface Warm" gradient or Neutral 100 to lift elements off the background.
- **The "Glow":** A soft, diffused radial gradient (Light Salmon 50 at 0% to transparent) is used behind key images or sections to create a sense of focus without a physical shadow.
- **Secondary Cards:** Use a simple 1px border of Neutral 200 for low-emphasis containers (e.g., pricing card borders).

## Shapes

The shape language is **structured and geometric**.
- **Standard Radius:** Most UI components (buttons, input fields) use `radius-12` (md).
- **Container Radius:** Large cards or image containers use `radius-24` (lg).
- **Small Elements:** Chips or status indicators use `radius-4` (xs).
- **Interactive Accents:** Hand-drawn vector loops (ellipses) are used to "circle" specific words or icons to break the rigidity of the grid.

## Components

### Buttons
- **Primary:** Background of Light Salmon 50, 1px border of Neutral 900, Martian Mono SemiBold text (All Caps). Features a 1px inner "echo" border for a technical, layered look.
- **Dark Variant:** Background of Neutral 900, 1px border of Neutral 0, White Martian Mono text. Used for high-impact footers or calls to action.
- **Icons:** Always use the directional arrows (up/down) with a slight tail for "Review Options" or "Join" actions.

### Cards
- **Membership Cards:** White or Neutral 100 background, 1px border of Neutral 200. Headlines in Martian Mono SemiBold. List items include a checkmark icon in Neutral 900.

### Input Fields & Controls
- **Checkboxes:** Square with `radius-4`, Neutral 900 border, and a simple sharp check icon.
- **Pricing:** Large Martian Mono Bold text for the dollar amount, paired with Inter for the "/month" suffix.

### Icons & Assets
- **Logo:** A book icon with a branching "git" tree on the cover, emphasizing the "Tech Book Club" intersection.
- **Social Icons:** Simple, filled versions of Github, LinkedIn, and React/Typescript logos contained in circular backgrounds.