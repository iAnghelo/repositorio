<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// https://github.com/diglactic/laravel-breadcrumbs?tab=readme-ov-file

// Inicio >
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
});
// Inicio > Repositorio Institucional
Breadcrumbs::for('institucional.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Repositorio Institucional', route('institucional.index'));
});

Breadcrumbs::for('investigacion.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Repositorio de Investigación', route('investigacion.index'));
});
