---
artifact: SOURCE-BASELINE
project: Tech book club landing page
profile: Lite
execution_mode: Gated
created: 2026-08-16
updated: 2026-08-16
---

# Source Baseline

## 2. Document Information

- Project: Tech book club landing page
- Created: 2026-08-16
- Last updated: 2026-08-16
- Owner: Project owner
- Related context: `PROJECT-CONTEXT.md`
- Operational state: `WORKFLOW-STATE.md`

## 3. Design Source Evidence

### SRC-DS-001 — Tech book club landing page Figma source

The ID and current registry fields belong in the workflow record in CLI-managed mode.

- **Source type:** Figma
- **Purpose:** Authoritative visual and responsive design source for the landing-page implementation.
- **Included scope:** Figma file `N9NGlGjQhwRVdnTZloWweh`, page `🤖 Workflow` (`2142:363`), including Main desktop (`2142:1298`, 1440px), tablet (`2142:1911`, 768px), and mobile (`2142:2091`, 375px) frames; Components (`2142:1264`); Style Guide (`2142:1265`); Visuals (`2142:1297`); and Section Components (`2151:714`).
- **Excluded scope:** All Figma pages outside `🤖 Workflow`, except read-only inspection of file-global resources when required by the repository contract. No structural or visual edits outside the approved scope are authorized.
- **Captured or inspected at:** 2026-08-16T02:35:00Z
- **Version, revision, or checksum evidence:** Mutable Figma file inspected through the connected Figma interface. No immutable named version was captured, so the canonical pin strength remains Time-bound.
- **Captured evidence:** The target page exists and exposes the responsive desktop/tablet/mobile frames plus reusable component, style-guide, and visual-support sections. The main frames contain Hero, Read Together, Community, Reading Journey, Membership Options, Testimonial, and Footer sections.
- **Access and reproduction instructions:** Open the project Figma file and inspect page/node `2142:363` through the connected Figma interface; compare the scoped frames and supporting sections listed above.
- **Dependencies:** Local Figma components, variables/styles, visual assets, and any file-global design-system resources referenced by the scoped page.
- **Authority for this project:** Figma owns approved visual/layout/content intent for the scoped page. Repository instructions own implementation constraints. Semantic HTML, keyboard behavior, screen-reader behavior, intermediate responsive behavior, and runtime performance must be designed and validated in code rather than inferred as proven by Figma.
- **Known limitations:** The URL is mutable and therefore not an immutable design baseline. Reverify before later material stages and tasks.

## 4. Repository Source Evidence

### SRC-REPO-001 — Workflow initialization repository baseline

- **Repository:** `ferfalcon/tech-book-club-landing-page`
- **Relevant application, package, or directory:** `frontend/`
- **Branch at capture:** `workflow/initialize-implementation`
- **Captured at:** 2026-08-16T02:29:28Z
- **Lockfile, submodule, or workspace state:** `frontend/pnpm-lock.yaml` and `frontend/pnpm-workspace.yaml` are present. No submodules were identified in the inspected repository tree.
- **Uncommitted changes or patch:** None in the GitHub Actions checkout used by workflow initialization.
- **Access and reproduction instructions:** Resolve commit `82471d57b717786adc9c2f9a83cd6a5cd696768f` in `ferfalcon/tech-book-club-landing-page` and inspect `frontend/` plus the repository operating contracts.
- **Build or inspection context:** The frontend is an Astro starter using Astro `^7.2.2`, pnpm `10.28.0`, and Node `24.x`. The landing page itself is not yet implemented; the current source contains the default starter page/components. The recorded commit includes the temporary one-shot workflow initializer; that file was removed by the expected workflow-output commit `7c912478e8b28969c473367c6adf99fed4a142be` without changing application code.
- **Known limitations:** The canonical record stores the GitHub Actions runner checkout path as the snapshot reference. Reproduction should use repository identity plus the immutable commit SHA rather than that ephemeral runner path.

## 5. Runtime Source Evidence

No runtime snapshot is active at Stage 0. A production URL is known from the repository/project configuration, but it has not yet been registered and verified as `SRC-RUN-*`. Runtime and Vercel preview evidence will be captured when required by later validation stages.

## 6. Documentation Source Evidence

Repository-owned instructions are included in `SRC-REPO-001`. The root `AGENTS.md` is the canonical project operating contract, and `frontend/AGENTS.md` provides Astro-specific instructions. No separate `SRC-DOC-*` snapshot is active at Stage 0.

## 7. Asset Source Evidence

Starter assets and fonts under `docs/starter-code/assets/` are present in the repository baseline and therefore covered by `SRC-REPO-001`. No separate `SRC-ASSET-*` snapshot is active at Stage 0; asset authority and usage will be checked during the design audit and implementation planning stages.

## 8. Source Verification Log

| Date and time | Snapshot | Verification method | Result classification | Change detected | Action |
|---|---|---|---|---|---|
| 2026-08-16T02:35:00Z | `SRC-DS-001` | Connected Figma metadata inspection of file/page and scoped nodes | Unchanged | No material mismatch identified | Record verification in canonical workflow state; reverify before material downstream work |
| 2026-08-16T02:29:45Z | `SRC-REPO-001` | Git commit resolution and repository-tree inspection | Unchanged | No unexpected input change; later differences are expected workflow-control output | Record verification in canonical workflow state |

Record checks before stages, after meaningful pauses, before tasks, and before final acceptance. Current snapshot status remains in the workflow record in CLI-managed mode.

## 9. Upstream Rebaseline and Impact Assessments

No upstream rebaseline has been required. The move from commit `82471d57b717786adc9c2f9a83cd6a5cd696768f` to workflow-output commit `7c912478e8b28969c473367c6adf99fed4a142be` removed the temporary initializer and added canonical workflow artifacts; it is expected workflow output, not an upstream application-source change.

## 10. Baseline Review

### Pass 1 — Completeness and correctness

- [x] Every material Stage 0 source has a snapshot ID and evidence section.
- [x] Exact scope and capture time are recorded.
- [x] Repository snapshots use commit SHAs in the canonical registry.
- [x] No task output exists yet; task-output lineage will be recorded when implementation begins.
- [x] Mutable sources are not mislabeled as immutable.
- [x] Access and reproduction limitations are explicit.

### Pass 2 — Consistency, traceability, source integrity, risks, and uncertainty

- [x] Generated source state is managed by the CLI and will be checked before Stage 0 advancement.
- [x] Identifiers follow the workflow identifier conventions.
- [x] Expected workflow output is distinguished from upstream source changes.
- [x] No unexpected upstream rebaseline currently requires an impact assessment.
- [x] Evidence sections do not redefine record-owned status or lineage.
- [x] No Stage 0 artifact silently relies on undefined or newer source content.
