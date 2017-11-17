<?php
namespace MyNamespace;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }

echo __NAMESPACE__ . "<br>";

namespace AnotherNamespace;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }

echo __NAMESPACE__ . "<br>";