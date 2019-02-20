<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Open home,join,login pages');

$I->amOnPage('/');
$I->see('lorem');

$I->seeLink('Join', '/site/join');
$I->seeLink('Login', '/site/login');

$I->amOnPage('/site/join');
$I->see('Join as', 'h1');

$I->amOnPage('/site/login');
$I->see('Login', 'h1');