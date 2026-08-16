---
artifact: IMPLEMENTATION-BRIEF
status: Draft
baseline:
  design:
    - SRC-DS-001
  repository:
    - SRC-REPO-001
  runtime: []
  documentation: []
  assets: []
created: 2026-08-16
updated: 2026-08-16
project: Tech book club landing page
profile: Lite
execution_mode: Gated
---

# Implementation Brief

## 1. Document Information

- Status: Draft
- Scope: Complete single-page Tech Book Club landing page represented by the approved `🤖 Workflow` Figma scope and implemented in `frontend/`.
- Last updated: 2026-08-16
- Project context: `PROJECT-CONTEXT.md`
- Source baseline: `SOURCE-BASELINE.md`
- Evidence baseline: `DESIGN-AUDIT.md`
- Repository snapshot: `SRC-REPO-001`

## 2. Requirements

### Stage 2 source status

- Active inputs: `SRC-DS-001`, `SRC-REPO-001`.
- Design source re-verification: 2026-08-16 connected Figma metadata inspection confirmed that page `🤖 Workflow` (`2142:363`) still contains the audited desktop (`2142:1298`), tablet (`2142:1911`), mobile (`2142:2091`), Components, Style Guide, Visuals, and Section Components structures. No material structural conflict with `DESIGN-AUDIT.md` was detected.
- Repository authority: `SRC-REPO-001` remains the immutable implementation-input snapshot for repository constraints. Workflow-control commits after that snapshot do not redefine the frontend input baseline.
- Owner interaction decisions recorded on 2026-08-16:
  - Hero/footer “Review membership options” links navigate in-page to Membership Options.
  - Starter/Pro “Subscribe now” links use `href="#"`; a real subscription destination is out of scope.
  - Enterprise “Talk to us” uses `href="#"`; a real contact destination is out of scope.
  - Bluesky and LinkedIn icons are links using `href="#"`; real social-profile destinations are out of scope.

### Goals

- Deliver the complete Tech Book Club marketing landing page represented by `EVD-002`, `EVD-003`, and `EVD-004`, preserving the approved content hierarchy and visible product message.
- Make the same material content and membership information available across the supplied desktop, tablet, and mobile layout conditions without clipping, overlap, or loss of content.
- Preserve the approved visual hierarchy and interaction-state intent while adding semantic, keyboard, focus, naming, image, reflow, and other accessibility behavior that Figma cannot independently prove.
- Keep the result a static Astro landing page with no backend, persistence, authentication, payment, subscription processing, contact processing, or external-service behavior.
- Preserve traceability from approved design evidence and repository constraints through later design, specification, planning, implementation, and validation work.

### Non-goals

- Adding routes, modals, forms, checkout, account management, subscription processing, contact processing, authentication, persistence, or APIs not demonstrated or explicitly approved.
- Providing real external destinations for subscription, contact, Bluesky, or LinkedIn links; those destinations are explicitly out of scope and use `#` placeholders.
- Changing the approved marketing copy, membership information, testimonial, section order, or Figma scope without an explicit upstream decision.
- Treating 1440 px, 768 px, or 375 px as automatic CSS breakpoint thresholds; exact interpolation belongs to later design/specification work.
- Inventing business rules, animation, or disabled/loading/error states not supported by the approved source or a later owner decision.
- Editing Figma pages outside the repository-authorized `🤖 Workflow` scope.

### Users and needs

- **Inferred primary visitor:** a developer or technology professional evaluating the book club, based on the page copy and `EVD-012`. The visitor needs to understand the club value proposition, how the reading journey works, membership options, social proof, and the available next actions.
- **Confirmed quality need:** visitors using keyboard or assistive technology must receive the same material content and meaningful interaction access required by the repository accessibility baseline in `SRC-REPO-001`.

### REQ-FR-001 — Present the complete landing-page content hierarchy

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** The delivered page must present the seven audited product sections in this order: Hero → Read Together → Community → Reading Journey → Membership Options → Testimonial → Footer.
- **Rationale:** This sequence is consistent across all three supplied compositions and defines the approved single-page information architecture.
- **Snapshot or evidence:** `EVD-002`, `EVD-003`, `EVD-004`, `EVD-012` from `SRC-DS-001`.
- **Acceptance criteria:**
  - `AC-001`: One landing page contains all seven sections in the approved order.
  - `AC-002`: No approved section is omitted, duplicated, or moved to a different route.

### REQ-FR-002 — Preserve approved visible content and membership information

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** Headings, body copy, feature lists, reading-journey steps, membership names, prices, benefits, CTA labels, social proof, testimonial text/attribution, and footer copy must match the approved design source unless an explicit content decision supersedes it.
- **Rationale:** The design audit identifies the visible text as authoritative design copy and no separate content source is registered.
- **Snapshot or evidence:** `EVD-002`, `EVD-003`, `EVD-004`, `EVD-012` from `SRC-DS-001`.
- **Acceptance criteria:**
  - `AC-003`: Starter, Pro, and Enterprise are all present with the plan content and labels shown in the approved design.
  - `AC-004`: The testimonial, social-proof message, feature copy, journey copy, and section headings match the approved source except for explicitly approved content changes.

### REQ-FR-003 — Preserve content and usable layout across responsive conditions

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** The page must preserve all material content and intended reading order across the supplied desktop, tablet, and mobile conditions, with layout transformations consistent with the audited evidence. Intermediate widths must remain usable without content overlap, clipping, or layout-caused horizontal page scrolling.
- **Rationale:** The Figma source supplies three explicit responsive compositions but no implementation breakpoint thresholds.
- **Snapshot or evidence:** `EVD-002`, `EVD-003`, `EVD-004`, `EVD-005`; `AUD-001`.
- **Acceptance criteria:**
  - `AC-005`: At 1440 px, 768 px, and 375 px reference widths, all material content is available and the major section transformations match the corresponding approved composition.
  - `AC-006`: At representative intermediate widths selected during later design/specification work, content does not overlap, clip, disappear, or force layout-caused horizontal page scrolling.

### REQ-FR-004 — Implement the owner-approved CTA link behavior

- **Classification:** Confirmed by owner decision
- **Priority:** Must
- **Description:** CTA controls are links. Hero and footer “Review membership options” links navigate to the Membership Options section on the same page. Starter/Pro “Subscribe now” and Enterprise “Talk to us” use literal `href="#"` placeholder destinations because real subscription/contact destinations and flows are outside this project scope.
- **Rationale:** `EVD-007`, `AUD-002`, and `AUD-009` show CTA affordances without destinations; the project owner supplied the missing Stage 2 behavior on 2026-08-16.
- **Snapshot or evidence:** `EVD-006`, `EVD-007`; `AUD-002`, `AUD-009`; owner decision 2026-08-16.
- **Acceptance criteria:**
  - `AC-007`: Hero and footer “Review membership options” links target the Membership Options section using an in-page fragment identifier.
  - `AC-008`: Starter and Pro “Subscribe now” links and Enterprise “Talk to us” are anchor elements whose `href` value is exactly `#` unless the owner later explicitly expands scope.
  - `AC-009`: No subscription, checkout, contact, account, or external destination behavior is implemented behind those `#` placeholders.

### REQ-FR-005 — Present the approved social-proof content in both intended contexts

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** Social proof must be presented in the hero and footer contexts as demonstrated by the approved design, with the corresponding content and responsive treatment.
- **Rationale:** Social proof is a repeated approved pattern and part of the page’s trust/message hierarchy.
- **Snapshot or evidence:** `EVD-005`, `EVD-012` from `SRC-DS-001`.
- **Acceptance criteria:**
  - `AC-010`: Hero and footer each contain the approved social-proof content without dropping the message at the supplied reference widths.

### REQ-AR-001 — Provide semantic structure and a coherent reading order

- **Classification:** Confirmed by project quality baseline
- **Priority:** Must
- **Description:** The implementation must expose a semantic document and landmark structure, meaningful heading hierarchy, and reading order corresponding to the approved visible content hierarchy.
- **Rationale:** Figma demonstrates visual hierarchy and reading order but cannot establish HTML semantics or assistive-technology navigation.
- **Snapshot or evidence:** `EVD-012`; accessibility expectations in `SRC-REPO-001` and `PROJECT-CONTEXT.md`.
- **Acceptance criteria:**
  - `AC-011`: The rendered document has a coherent heading hierarchy and appropriate page/section landmarks matching the visible content structure.
  - `AC-012`: DOM/assistive-technology reading order follows the meaningful top-to-bottom content order and does not depend on visual positioning alone.

### REQ-AR-002 — Provide keyboard-operable interactions and visible focus

- **Classification:** Confirmed by project quality baseline and observed focus intent
- **Priority:** Must
- **Description:** Every implemented interactive control must be keyboard reachable and operable according to its semantics, with clearly visible focus indication consistent with the supplied CTA focus-state intent.
- **Rationale:** CTA focus variants exist in the design, while prototype evidence does not establish keyboard behavior.
- **Snapshot or evidence:** `EVD-006`; `AUD-003`; accessibility expectations in `SRC-REPO-001`.
- **Acceptance criteria:**
  - `AC-013`: All links and other interactive elements can be reached and activated using the keyboard according to native semantics.
  - `AC-014`: Keyboard focus is visibly distinguishable on every interactive control; supplied CTA focus-state visual intent is preserved where applicable.

### REQ-AR-003 — Give images appropriate accessible semantics

- **Classification:** Confirmed by project quality baseline; exact per-image classification pending later design/specification work
- **Priority:** Must
- **Description:** Content-bearing images must expose useful alternative text, while purely decorative imagery must not add redundant or meaningless announcements. Each relevant image/visual must be classified according to its page purpose before final validation.
- **Rationale:** The design contains reusable photographs, avatars, patterns, glow, and technology artwork, but Figma does not specify alternative-text intent.
- **Snapshot or evidence:** `EVD-010`, `EVD-011`; `AUD-006`; accessibility expectations in `SRC-REPO-001`.
- **Acceptance criteria:**
  - `AC-015`: Every rendered image or equivalent visual has an explicit content-versus-decorative accessibility decision.
  - `AC-016`: Content images have useful accessible text where needed and decorative visuals are hidden from assistive technology or otherwise exposed without redundant content.

### REQ-AR-004 — Provide accessible social links

- **Classification:** Confirmed by owner decision and project quality baseline
- **Priority:** Must
- **Description:** Bluesky and LinkedIn are interactive links using literal `href="#"` placeholders. Each icon-only link must have a meaningful accessible name, keyboard access, and visible focus treatment. Real profile URLs are outside scope.
- **Rationale:** `AUD-005` identifies missing social-link behavior; the owner confirmed on 2026-08-16 that both icons are links and that `#` placeholders must be used.
- **Snapshot or evidence:** `AUD-005` from `SRC-DS-001`; `SRC-REPO-001`; owner decision 2026-08-16.
- **Acceptance criteria:**
  - `AC-017`: Bluesky and LinkedIn are anchor elements whose `href` value is exactly `#` unless the owner later explicitly expands scope.
  - `AC-018`: Each social link exposes the corresponding meaningful accessible name and a keyboard-visible focus indication.

### REQ-AR-005 — Preserve readable, robust content under reflow and visual accessibility checks

- **Classification:** Confirmed by project quality baseline
- **Priority:** Must
- **Description:** The implemented page must remain readable and operable when content reflows across supported widths and during relevant zoom/text-resize checks, and implemented text/control states must be checked for sufficient visual contrast before acceptance. No conformance level is claimed until validation is actually executed.
- **Rationale:** Figma alone does not prove contrast compliance, browser zoom, text resize, or reflow behavior.
- **Snapshot or evidence:** `AUD-001`; accessibility observations in `DESIGN-AUDIT.md`; quality expectations in `SRC-REPO-001` and `PROJECT-CONTEXT.md`.
- **Acceptance criteria:**
  - `AC-019`: Relevant zoom/text-resize and narrow-width validation does not make material content or controls inaccessible because of clipping, overlap, or layout-caused horizontal page scrolling.
  - `AC-020`: Contrast of implemented text and interactive states is explicitly checked during validation; failed checks are corrected or documented as blocking.

### REQ-NFR-001 — Match the approved visual result at the supplied reference widths

- **Classification:** Confirmed
- **Priority:** Must
- **Category:** Visual fidelity
- **Description:** The rendered page must preserve the approved hierarchy, typography roles, color system, spacing relationships, imagery, section composition, and supplied interaction-state appearance at the 1440 px, 768 px, and 375 px reference conditions.
- **Measurement conditions:** Evidence-backed visual comparison against `EVD-002`, `EVD-003`, and `EVD-004` during implementation validation.
- **Snapshot or evidence:** `EVD-002` through `EVD-011` from `SRC-DS-001`.
- **Acceptance criteria:**
  - `AC-021`: Visual comparison at each supplied reference width finds no unresolved material discrepancy in page hierarchy, content, responsive composition, core typography/color treatment, imagery, or CTA state appearance.

### REQ-NFR-002 — Keep the static page implementation appropriately lightweight

- **Classification:** Confirmed by project quality baseline
- **Priority:** Should
- **Category:** Performance / maintainability
- **Description:** The implementation should retain the static-page character of the project, avoid unnecessary client-side JavaScript, and use appropriate image/font delivery for the approved content. No unsupported numeric performance budget is introduced.
- **Measurement conditions:** Production build and implementation inspection.
- **Snapshot or evidence:** `SRC-REPO-001`; `PROJECT-CONTEXT.md` quality baseline.
- **Acceptance criteria:**
  - `AC-022`: The production Astro build succeeds.
  - `AC-023`: Client-side JavaScript is introduced only where required by an approved interaction or implementation need rather than by default.

### Requirements not applicable to the approved Stage 2 scope

- No `REQ-DR-*` requirement is introduced because the approved scope contains no user-entered, persisted, fetched, or dynamically owned application data.
- No `REQ-SEC-*` requirement is introduced because the approved scope contains no authentication, authorization, sensitive-data flow, backend trust boundary, or external integration. General safe web implementation remains an engineering responsibility but no unsupported security policy is invented here.

### Constraints

#### REQ-CON-001 — Implement within the existing frontend toolchain

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** Implementation work belongs in `frontend/` and must respect the repository’s Astro + TypeScript, pnpm, and Node.js constraints.
- **Snapshot or evidence:** `SRC-REPO-001`; `PROJECT-CONTEXT.md`.
- **Impact:** Later planning and implementation must use the existing application/toolchain rather than introducing an unrelated framework stack.

#### REQ-CON-002 — Preserve the protected Figma scope

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** The primary Figma scope is `🤖 Workflow`; other pages must not be structurally or visually modified without explicit approval, subject only to the repository-defined controlled global design-system exception.
- **Snapshot or evidence:** `SRC-DS-001`, `SRC-REPO-001`.
- **Impact:** Design follow-up cannot silently change unrelated Figma pages.

#### REQ-CON-003 — Follow branch, PR, preview verification, and merge policy

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** Implementation changes must follow dedicated branch → pull request → relevant Vercel preview verification → merge, and must not be pushed directly to `main` unless explicitly requested.
- **Snapshot or evidence:** `SRC-REPO-001`; `PROJECT-CONTEXT.md`.
- **Impact:** Source-control and deployment validation are part of implementation completion.

#### REQ-CON-004 — Reverify the mutable Figma baseline before affected material work

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** Because `SRC-DS-001` is time-bound rather than immutable, relevant Figma inputs must be reverified before later material work that depends on them. A material source change requires a new `SRC-*` record and impact assessment rather than silent reuse.
- **Snapshot or evidence:** `SRC-DS-001`; `PROJECT-CONTEXT.md`; workflow source-snapshot rules.
- **Impact:** Later stages may need to return to the earliest affected workflow stage if the design changes materially.

#### REQ-CON-005 — Keep unsupported application capabilities out of scope

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** Backend services, persistence, authentication, authorization, payment/subscription processing, contact processing, external APIs, and additional routes remain outside the approved scope unless later evidence and owner approval explicitly change it.
- **Snapshot or evidence:** `SRC-DS-001`, `SRC-REPO-001`; `PROJECT-CONTEXT.md`; `AUD-009`; owner decision 2026-08-16.
- **Impact:** Placeholder `#` links must not be expanded into unsupported product flows.

#### REQ-CON-006 — Preserve documentation-only deployment filtering

- **Classification:** Confirmed
- **Priority:** Must
- **Description:** Work must preserve the project’s deployment behavior that avoids unnecessary Vercel builds for documentation-only changes outside the frontend deployment scope.
- **Snapshot or evidence:** `SRC-REPO-001`; project deployment expectations recorded in `PROJECT-CONTEXT.md`.
- **Impact:** Workflow/documentation changes must not intentionally broaden the Vercel build trigger scope.

### Dependencies

| Dependency | Snapshot or evidence | Purpose | Availability | Risk |
|---|---|---|---|---|
| Approved `🤖 Workflow` Figma scope | `SRC-DS-001`, `EVD-001`–`EVD-012` | Product content, visual intent, supplied responsive examples, components/states, imagery | Available; mutable/time-bound | Material edits at the same URL require re-verification and possible impact assessment |
| Repository/toolchain | `SRC-REPO-001` | Application constraints and implementation environment | Available; immutable input commit | Later workflow-control commits must not be confused with frontend input changes |
| Supplied photographs/member imagery | `EVD-010`, `AUD-006` | Approved visual content | Available in Figma | Accessible semantics and production-use/licensing status require explicit handling |
| CTA/social link behavior | `EVD-007`, `AUD-002`, `AUD-005`, `AUD-009`; owner decision 2026-08-16 | Link behavior | Resolved for current scope | Real subscription/contact/social destinations remain intentionally out of scope |

### Assumptions and approved decisions

- **Inferred:** The intended product is one marketing landing page; all supplied compositions present the same section sequence and no alternate route or flow exists.
- **Confirmed by owner:** Hero/footer “Review membership options” navigates in-page to Membership Options.
- **Confirmed by owner:** Starter/Pro “Subscribe now”, Enterprise “Talk to us”, Bluesky, and LinkedIn use `href="#"` placeholders; their real destinations are out of scope.
- **Recommended:** Exact CSS breakpoints should be selected later from observed responsive transformations and content/layout failure points, not copied automatically from the three Figma frame widths.
- **Recommended:** Do not introduce motion solely for decoration; if later interaction design adds motion, reduced-motion behavior must be addressed before implementation acceptance.

### Blocking product decisions

None for Stage 2.

### Non-blocking questions and risks

- Should footer copyright remain literal `© 2024 – Tech Book Club` or use an approved updated/dynamic year? This does not block Stage 2 and can be resolved before content is treated as final.
- Are the supplied photographs/member portraits approved production assets with acceptable licensing? The files are available in Figma, but the audit did not establish licensing.
- Active/pressed visual treatment is not supplied for CTA controls. Later design/specification work should determine whether any additional state is materially required by the selected link semantics.
- Exact intermediate responsive thresholds remain intentionally deferred to Stage 3/4; this is not a Stage 2 blocker provided the outcome requirements above remain intact.
- Links with `href="#"` are intentional scope placeholders, not representations of finished external product journeys.

### Stage 2 review pass 1 — Completeness and correctness

- [x] Goals, non-goals, users, functional needs, accessibility expectations, non-functional expectations, constraints, dependencies, assumptions, questions, risks, and acceptance criteria are covered as applicable.
- [x] Material requirements are specific, prioritized, testable, and implementation-neutral except where the repository or owner establishes a real constraint.
- [x] Unsupported backend, business, browser, performance-threshold, retention, authentication, security-policy, and breakpoint behavior was not invented.
- [x] CTA and social-link behavior now reflects explicit owner decisions rather than inferred destinations.

### Corrections from Stage 2 review pass 1

- Confirmed the in-page Membership Options navigation for hero/footer membership-review links.
- Confirmed literal `href="#"` placeholders for Starter/Pro subscription, Enterprise contact, Bluesky, and LinkedIn links and explicitly kept their real destinations out of scope.
- Removed the earlier requirement that all CTA links resolve to meaningful external destinations, because it contradicted the owner-approved placeholder scope.
- Kept exact responsive breakpoints out of requirements and expressed responsive needs as observable outcomes.
- Kept image semantics outcome-based; exact alt text and content/decorative classification remain for later design/specification work.
- Preserved Stage 0 `REQ-CON-001` through `REQ-CON-004` identifiers in their owning Lite requirements section without renumbering them.

### Stage 2 review pass 2 — Consistency, traceability, source integrity, risks, and uncertainty

- [x] Requirement identifiers follow `Identifier-Conventions.md` and are owned only in this Requirements section.
- [x] Every material confirmed requirement cites approved evidence, an active snapshot, the repository/project quality baseline, or an explicit owner decision.
- [x] Confirmed, inferred, recommended, and open information remain distinct.
- [x] The scoped Figma structure was reverified on 2026-08-16 before this Stage 2 update; no material structural conflict with the approved audit was detected.
- [x] No unsupported subscription, contact, social-profile, backend, business-rule, or breakpoint behavior is presented as confirmed.
- [x] The `#` placeholder decisions are explicit and do not silently imply external flows.
- [x] No Stage 2 blocking product decision remains.

### Stage 2 readiness

`Ready for Stage 2 gated approval` — requirements are complete for the current Lite scope. Per Gated execution mode, do not advance to Stage 3 until the project owner explicitly approves Stage 2.

## 3. Design Intent

### Stage 3 source status

- Active inputs: `SRC-DS-001`, `SRC-REPO-001`; Stage 2 is recorded as owner-approved in the workflow record.
- Design source re-verification: On 2026-08-16, connected Figma metadata plus fresh rendered screenshots confirmed the audited desktop (`2142:1298`, 1440 px), tablet (`2142:1911`, 768 px), and mobile (`2142:2091`, 375 px) compositions, their seven-section order, section-component variants, and the Primary/Alternate CTA state sets. No material visual or structural conflict with `DESIGN-AUDIT.md` was detected.
- The three supplied frame widths are design-reference conditions and validation anchors. They are not automatically implementation breakpoint thresholds.
- Stage 3 records visual, responsive, content, interaction, and accessibility intent only. Implementation architecture and file/module choices remain outside this stage.

### DES-001 — Preserve the landing-page narrative and visual hierarchy

- **Classification:** Confirmed and observed.
- **Intent:** Preserve the approved seven-section sequence and its visual emphasis: Hero → Read Together → Community → Reading Journey → Membership Options → Testimonial → Footer. The hero establishes the primary value proposition and first CTA; the two editorial sections explain the community value; Reading Journey explains progression; Membership Options is the commercial comparison focal point; the testimonial provides social validation; and the dark footer closes with the repeated membership CTA and social proof. Do not reorder, merge, hide, or visually demote these sections in a way that changes the approved narrative.
- **Snapshot and evidence:** `EVD-002`, `EVD-003`, `EVD-004`, `EVD-012`; fresh Stage 3 renders of `2142:1298`, `2142:1911`, and `2142:2091` from `SRC-DS-001`.
- **Requirement references:** `REQ-FR-001`, `REQ-FR-002`, `REQ-FR-005`, `REQ-NFR-001`.
- **Confidence:** High — section order and hierarchy are consistent across all supplied reference compositions.

### DES-002 — Preserve the approved typography, color, spacing, and emphasis system

- **Classification:** Observed.
- **Intent:** Preserve the distinct typographic roles documented by the local design system: Martian Mono for display/heading/label emphasis, Inter for body copy, and Fira Code for the brand wordmark. Preserve the neutral and light-salmon foundation palette, the light patterned content surfaces, the dark footer surface, and the coral/salmon accent language. Maintain the Pro membership card as the visibly emphasized plan without introducing a selected-state meaning. Preserve the source spacing rhythm, rounded-corner language, thin outlines, and decorative grid/glow treatments as secondary to content rather than allowing decoration to reduce legibility.
- **Snapshot and evidence:** Style Guide and local variables in `EVD-008`, `EVD-009`; visual inventory in `DESIGN-AUDIT.md`; `EVD-002`, `EVD-003`, `EVD-004`.
- **Requirement references:** `REQ-FR-002`, `REQ-NFR-001`, `REQ-AR-005`.
- **Confidence:** High — the design system and repeated section instances provide explicit visual evidence.

### DES-003 — Treat photography and decorative artwork according to page purpose

- **Classification:** Recommended accessibility interpretation based on observed source purpose.
- **Intent:** Keep the approved hero, reading-group, and community photographs in their demonstrated visual roles and crops, but treat them as decorative/context-setting for assistive technology because the adjacent headings and copy carry the material product information. Treat member-avatar artwork as decorative because the adjacent “200+ developers joined already” text carries the social-proof meaning. Treat background patterns, glow, journey arrows, circle marks, and the technology-logo cluster as decorative. The Tech Book Club brand mark is content-bearing identity and must expose the brand name once without causing duplicate announcements. No decorative visual should become an interactive control unless a later approved requirement changes scope.
- **Snapshot and evidence:** `EVD-005`, `EVD-010`, `EVD-011`; `AUD-006`, `AUD-008`; fresh Stage 3 renders from `SRC-DS-001`.
- **Requirement references:** `REQ-AR-003`, `REQ-FR-005`, `REQ-NFR-001`.
- **Confidence:** Medium — the visual roles are clear, while accessibility semantics are an implementation-facing interpretation not encoded by Figma itself.

### DES-004 — Preserve readable content and allow vertical growth under reflow

- **Classification:** Confirmed outcome with recommended edge-case treatment.
- **Intent:** Preserve all approved copy without truncation. Headings, descriptive copy, list items, social-proof text, prices, testimonial text, and footer content may wrap as space tightens; section and card height should grow rather than clip content. CTA labels should remain readable and intact. The approved source copy is the content baseline; no localization or arbitrary long-content scenario is introduced, but modest browser/text-resize wrapping must not break the hierarchy or hide material information.
- **Snapshot and evidence:** `EVD-002`, `EVD-003`, `EVD-004`, `EVD-012`; `AUD-001`; accessibility observations in `DESIGN-AUDIT.md`.
- **Requirement references:** `REQ-FR-002`, `REQ-FR-003`, `REQ-AR-005`, `REQ-NFR-001`.
- **Confidence:** High for the no-loss/no-clipping outcome; medium for exact intermediate wrapping because Figma supplies only three reference conditions.

### DES-RWD-001 — Use the supplied viewport compositions as reference conditions, not hard-coded thresholds

- **Classification:** Observed with recommended interpolation principle.
- **Intent:** Match the 1440 px desktop, 768 px tablet, and 375 px mobile compositions at those reference conditions. Between them, transition to the next simpler layout before content or controls collide, become overly compressed, or create horizontal page scrolling. Stage 4 may select implementation thresholds from observed layout failure points; it must not assume that 1440, 768, or 375 are the threshold values merely because they are Figma frame widths.
- **Snapshot and evidence:** `EVD-002`, `EVD-003`, `EVD-004`; `AUD-001`; fresh Stage 3 renders from `SRC-DS-001`.
- **Requirement references:** `REQ-FR-003`, `REQ-AR-005`, `REQ-NFR-001`, `REQ-CON-004`.
- **Confidence:** High for the three reference conditions; medium for intermediate-width interpolation because thresholds are intentionally absent from the source.

### DES-RWD-002 — Stack the hero and editorial sections while preserving text-first reading order

- **Classification:** Observed.
- **Intent:** On desktop, preserve the hero’s text/social-proof and image columns, Read Together’s image-left/text-right composition, and Community’s text-left/image-right composition. At tablet and mobile conditions, stack these sections vertically: hero text/CTA/social proof before the hero image; Read Together text/checklist before its image; Community text before its image. The DOM/assistive-technology order should follow the meaningful text-first sequence so responsive visual changes do not require a different reading order.
- **Snapshot and evidence:** `EVD-002`, `EVD-003`, `EVD-004`, `EVD-005`, `EVD-012`; `2142:1298`, `2142:1911`, `2142:2091`.
- **Requirement references:** `REQ-FR-003`, `REQ-AR-001`, `REQ-NFR-001`.
- **Confidence:** High — the transformation is directly demonstrated at all three supplied conditions.

### DES-RWD-003 — Transform journey, membership, testimonial, and footer layouts progressively

- **Classification:** Observed.
- **Intent:** Keep Reading Journey as a horizontal four-step progression on desktop and a vertical sequence on tablet/mobile. Keep Membership Options as three cards in one row on desktop; at the supplied tablet condition use a two-column arrangement with the third card wrapping below; at mobile use one full-width card per row in Starter → Pro → Enterprise order. Keep testimonial content centered on desktop and left-aligned at tablet/mobile. Preserve the centered footer CTA/social-proof block while allowing the footer utility content to simplify from the wider desktop/tablet arrangement to the mobile stacked treatment shown by the source.
- **Snapshot and evidence:** `EVD-002`, `EVD-003`, `EVD-004`, `EVD-005`; fresh Stage 3 renders of `2142:1298`, `2142:1911`, `2142:2091`.
- **Requirement references:** `REQ-FR-001`, `REQ-FR-003`, `REQ-FR-005`, `REQ-NFR-001`.
- **Confidence:** High — each transformation is visible in the supplied compositions.

### DES-RWD-004 — Keep intermediate widths and accessibility reflow free of layout-caused loss

- **Classification:** Recommended implementation-facing design intent.
- **Intent:** Use flexible container widths and allow images, cards, text blocks, and section heights to adapt between the reference compositions. Preserve image crops/aspect intent without stretching; allow cards to wrap or stack before their copy or CTAs become cramped; allow headings and testimonial copy to wrap naturally; and avoid layout-caused horizontal page scrolling. Zoom/text-resize validation must retain the same content order and available controls even when the rendered result no longer matches an exact Figma line break.
- **Snapshot and evidence:** `AUD-001`; `EVD-002`, `EVD-003`, `EVD-004`; accessibility expectations from `SRC-REPO-001`.
- **Requirement references:** `REQ-FR-003`, `REQ-AR-005`, `REQ-NFR-001`.
- **Confidence:** Medium — the outcome is required, but exact intermediate layouts are not directly supplied.

### DES-INT-001 — Preserve CTA link behavior and the supplied default, hover, and focus visual language

- **Classification:** Confirmed by owner decision plus observed component states.
- **Intent:** Treat all CTA controls as links. Hero/footer “Review membership options” links navigate to the Membership Options section. Starter/Pro “Subscribe now” and Enterprise “Talk to us” retain literal `href="#"` placeholders with no hidden subscription/contact behavior. Preserve the supplied Primary and Alternate default/hover/focus appearances for their respective contexts and ensure the focus treatment is keyboard-visible. Do not invent loading, disabled, success, error, selected, or application-managed pressed states for these static links; ordinary link activation behavior does not create a new persistent UI state.
- **Snapshot and evidence:** `EVD-006`, `EVD-007`; `AUD-002`, `AUD-003`, `AUD-004`, `AUD-009`; owner decisions recorded 2026-08-16; Primary Button `136:1610`; Alternate Button `172:820`.
- **Requirement references:** `REQ-FR-004`, `REQ-AR-002`, `REQ-CON-005`.
- **Confidence:** High — destinations for the current scope are owner-approved and visual states are explicitly supplied.

### DES-INT-002 — Give icon-only social links clear names and a visible focus treatment

- **Classification:** Confirmed semantics with recommended visual treatment.
- **Intent:** Bluesky and LinkedIn remain icon-only links with literal `href="#"` placeholders and meaningful accessible names. Their keyboard focus must be clearly visible. Because Figma supplies no social-icon hover/focus variants, reuse the established focus language from the CTA system where practical rather than inventing a new branded interaction pattern. Any hover enhancement must remain subtle, preserve icon recognition/contrast, and must not be required to understand the control.
- **Snapshot and evidence:** `AUD-005`; `150:878`, `150:879`; CTA focus-state evidence in `EVD-006`; owner decision 2026-08-16.
- **Requirement references:** `REQ-AR-002`, `REQ-AR-004`.
- **Confidence:** High for semantics and focus requirement; medium for the exact social-link visual treatment because the source omits those variants.

### DES-INT-003 — Do not add authored motion that the design does not demonstrate

- **Classification:** Recommended conservative interpretation of missing motion evidence.
- **Intent:** Use normal link navigation and state changes without adding entrance animation, looping decoration, scroll-linked effects, or authored smooth scrolling solely for polish. This keeps the rendered behavior faithful to the static/prototype evidence and avoids introducing unnecessary motion or client-side behavior. If motion is later explicitly approved, reduced-motion handling becomes part of the owning design/specification change.
- **Snapshot and evidence:** Interaction/motion audit in `DESIGN-AUDIT.md`; `AUD-002`, `AUD-009`; `SRC-REPO-001` lightweight-static-page expectation.
- **Requirement references:** `REQ-NFR-002`, `REQ-CON-005`.
- **Confidence:** High that no motion is demonstrated; medium that absence means “do not add” rather than merely “unspecified,” so this remains an explicit Stage 3 design decision for owner approval.

### Stage 3 review pass 1 — Completeness and correctness

- [x] Visual hierarchy, typography/color/spacing intent, imagery, content edges, supplied responsive transformations, intermediate-width intent, interaction states, motion, and accessibility implications are covered for the Lite scope.
- [x] The 1440 px, 768 px, and 375 px frames are treated as validation anchors rather than invented breakpoint thresholds.
- [x] Desktop/tablet/mobile differences are described from fresh Stage 3 Figma evidence, including the tablet two-column membership wrap and mobile single-column membership stack.
- [x] CTA and social-link behavior remains consistent with the owner-approved Stage 2 decisions.
- [x] No implementation architecture, framework structure, or unsupported business behavior was introduced.

### Corrections from Stage 3 review pass 1

- Made the tablet Membership Options intent explicit as two columns with Enterprise wrapping below rather than describing tablet merely as “multi-column.”
- Classified the three contextual photographs, member avatars, patterns/glow, journey arrows, and technology-logo artwork as decorative for assistive technology, while keeping the Tech Book Club brand identity content-bearing.
- Explicitly required text/card vertical growth rather than clipping when browser or text reflow changes line breaks.
- Resolved the missing CTA active/disabled-state question by documenting that no authored persistent/async state is required for the approved static-link behavior.
- Kept exact breakpoint thresholds deferred to Stage 4 and tied future thresholds to layout failure points instead of Figma frame widths.
- Added a conservative no-authored-motion decision because no motion behavior is demonstrated by the approved source.

### Stage 3 review pass 2 — Consistency, traceability, source integrity, risks, and uncertainty

- [x] All `DES-*`, `DES-RWD-*`, and `DES-INT-*` items map to approved requirements and active source evidence.
- [x] Fresh Figma metadata and rendered screenshots were checked on 2026-08-16 before recording Stage 3 intent; no material source change was detected.
- [x] Observed, confirmed, recommended, and accessibility-derived decisions remain explicitly classified and include confidence.
- [x] The design intent preserves the same content hierarchy and material information across responsive conditions and assistive-technology reading order.
- [x] Placeholder destinations remain placeholders and do not imply subscription, contact, or social-profile flows.
- [x] Image licensing and footer-year treatment remain visible non-blocking product/content risks rather than being silently decided in design intent.
- [x] No Stage 3 blocking product decision remains.

### Stage 3 readiness

`Ready for Stage 3 gated approval` — design intent is complete for the current Lite scope. Per Gated execution mode, do not advance to Stage 4 until the project owner explicitly approves Stage 3.

## 4. Specification

Stage 4 has not started.

### SPEC-BEH-001 — Behavior title

- Requirement and design references:
- Source snapshots:
- Observable behavior:
- States and edge cases:
- Acceptance criteria: `AC-*`

Record applicable `SPEC-INT-*`, `SPEC-ACC-*`, `SPEC-VAL-*`, and `SPEC-DATA-*` items separately.

Do not invent arbitrary breakpoints, focus behavior, thresholds, or unsupported business rules.

## 5. Repository Context

Stage 7 repository planning has not started.

- Repository snapshot: `SRC-REPO-001`
- Existing files and conventions: Pending Stage 7 repository inspection.
- Reusable components, tokens, utilities, and tests: Pending Stage 7 repository inspection.
- Confirmed commands: Pending Stage 7 repository inspection.
- Constraints and technical debt: Pending Stage 7 repository inspection.

## 6. Implementation Plan

Stage 7 has not started.

### PLAN-001 — Plan item title

- Objective:
- Requirement and specification references:
- Source snapshots:
- Files and modules:
- Dependencies:
- Implementation steps:
- Integrated accessibility, responsive, state, error, and test work:
- Validation:

Do not create a separate late accessibility implementation phase.

## 7. Architecture Decision

- Separate architecture needed: Pending Stage 6 assessment.
- Reason: The current approved scope remains a static single-page Astro implementation with no meaningful routing, shared state, persistence, authentication, integration, or migration concern. Final architecture-skip handling belongs to Stage 6.

## 8. Source-change Handling

- Snapshot verification required before task execution: Yes for time-bound `SRC-DS-001`; repository task-start lineage must also be verified.
- Material changes that invalidate this brief: Material changes to scoped page content, section structure, CTA behavior, responsive intent, or repository constraints.
- Earliest workflow section or stage to revisit: The earliest owning stage affected by the source change.

Create new `SRC-*` IDs and perform an impact assessment rather than silently updating this brief to newer sources.

## 9. Risks, Assumptions, and Questions

### Blocking

- None at the Stage 3 checkpoint.

### Non-blocking

- Footer-year treatment remains unresolved: the design source still shows literal `© 2024 – Tech Book Club`.
- Production-use/licensing confirmation for supplied photographs/member portraits remains unresolved; their accessibility semantics are now documented separately in Stage 3.
- Exact intermediate responsive thresholds remain intentionally deferred to Stage 4 and must be derived from layout/content failure points rather than copied from Figma frame widths.
- Subscription/contact/social destinations remain intentionally out of scope and use `#` placeholders.

## 10. Traceability

| Snapshot or evidence | Requirement | Design | Specification or criterion | Plan item | Validation |
|---|---|---|---|---|---|
| `EVD-002`, `EVD-003`, `EVD-004`, `EVD-012` | `REQ-FR-001`, `REQ-FR-002`, `REQ-FR-003`, `REQ-NFR-001` | `DES-001`, `DES-002`, `DES-004`, `DES-RWD-001`, `DES-RWD-002`, `DES-RWD-003`, `DES-RWD-004` | Pending Stage 4 | Pending Stage 7 | Pending Stage 11 |
| `EVD-005` | `REQ-FR-003`, `REQ-FR-005` | `DES-001`, `DES-003`, `DES-RWD-002`, `DES-RWD-003` | Pending Stage 4 | Pending Stage 7 | Pending Stage 11 |
| `EVD-006`, `EVD-007`, `AUD-002`, `AUD-003`, `AUD-009`; owner decision 2026-08-16 | `REQ-FR-004`, `REQ-AR-002` | `DES-INT-001`, `DES-INT-003` | Pending Stage 4 | Pending Stage 7 | Pending Stage 11 |
| `EVD-010`, `EVD-011`, `AUD-006` | `REQ-AR-003` | `DES-003` | Pending Stage 4 | Pending Stage 7 | Pending Stage 11 |
| `AUD-005`; owner decision 2026-08-16 | `REQ-AR-004` | `DES-INT-002` | Pending Stage 4 | Pending Stage 7 | Pending Stage 11 |
| `SRC-REPO-001` | `REQ-AR-001`, `REQ-AR-002`, `REQ-AR-005`, `REQ-NFR-002`, `REQ-CON-001`, `REQ-CON-003`, `REQ-CON-006` | `DES-003`, `DES-004`, `DES-RWD-002`, `DES-RWD-004`, `DES-INT-001`, `DES-INT-002`, `DES-INT-003` | Pending Stage 4 | Pending Stage 7 | Pending Stage 11 |
| `SRC-DS-001`, `SRC-REPO-001` | `REQ-CON-002`, `REQ-CON-004`, `REQ-CON-005` | `DES-RWD-001`, `DES-INT-001`, `DES-INT-003` | Pending Stage 4 | Pending Stage 7 | Pending Stage 11 |

## 11. Review Pass 1 — Completeness and Correctness

Reserved for the complete Lite implementation-brief review at Stage 5. Stage 2 requirement-specific and Stage 3 design-specific review passes are recorded in their owning sections.

- [ ] Scope and pinned repository context are accurate.
- [ ] Snapshot IDs exist and were actually used.
- [ ] Requirements, design intent, testable behavior, and implementation planning are complete for the Lite scope.
- [ ] Responsive, accessibility, states, errors, content edge cases, and validation are integrated.
- [ ] The work still qualifies for Lite.

## 12. Corrections from Pass 1

Pending Stage 5.

## 13. Review Pass 2 — Consistency, Traceability, Source Integrity, Risks, and Uncertainty

Reserved for the complete Lite implementation-brief review at Stage 8. Stage 2 requirement-specific and Stage 3 design-specific review passes are recorded in their owning sections.

- [ ] Ownership sections and identifiers remain distinct.
- [ ] Every material plan item maps to approved requirements or specifications and pinned sources.
- [ ] No source changed silently after the brief baseline was recorded.
- [ ] No unsupported scope or assumption is presented as confirmed.
- [ ] Blocking questions are visible.
- [ ] Corrections from the first pass were included before this review.

## 14. Readiness

The final Lite brief readiness is not selected until the later consolidated checkpoints are complete.

Available final states:

- `Ready for task decomposition`
- `Ready with documented non-blocking assumptions`
- `Blocked by unresolved decisions`