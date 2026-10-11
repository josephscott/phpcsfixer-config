# Changelog josephscott/phpcsfixer-config

## 0.0.8 : 10 Oct 2026
- Bump php-cs-fixer to 3.95.27 ( supports `sebastian/diff` 9, needed for Pest 5 / PHPUnit 13 )
- Bump dev libs: Pest 5.3.1, PHPStan 2.3.1
- Replace deprecated PHPUnit `cacheResult` with `recordTestRunHistory`
- CI: test on PHP 8.4 and 8.5 ( Pest 5 requires PHP 8.4+ )

## 0.0.7 : 13 Jun 2026
- Bump lib versions
- Avoid deprecation warning ( replace `visibility_required` with `modifier_keywords`

## 0.0.6 : 24 Jan 2026
- Set `closure_function_spacing` to `none`

## 0.0.5 : 24 Jan 2026
- Move php-cs-fixer from `require-dev` to `require` in composer

## 0.0.4 : 2025-01-20
- Tests via Github Actions
- Set 'ordered_imports' -> 'imports_order' to `[ 'const', 'class', 'function' ]`

## 0.0.3 : 2024-11-04
- Turn off `native_function_invocation`

## 0.0.2 : 2024-08-06
- Include `declare_strict_types` as true by default

## 0.0.1 : 2024-05-22
- First working version
