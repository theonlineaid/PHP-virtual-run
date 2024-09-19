In PHP, you **cannot** use `const` inside a function or an `if` block. Constants declared with `const` must be defined at the top level of a script or inside a class, not within block scopes like functions or conditional statements.

### Example of Invalid Usage (Inside Function or If Block):
```php
if (true) {
    const MY_CONST = "Hello"; // Invalid: const inside an if block
}

function myFunction() {
    const MY_FUNC_CONST = "World"; // Invalid: const inside a function
}
```

Both of these cases will result in a **syntax error** because `const` must be declared at the top level of a script or within a class.

### Example of Valid Usage (Top-Level or Class):
```php
// Top-level declaration
const MY_CONST = "Hello"; // Valid

class MyClass {
    const MY_CLASS_CONST = "World"; // Valid inside a class
}

echo MY_CONST; // Outputs: Hello
echo MyClass::MY_CLASS_CONST; // Outputs: World
```

### If You Want Constants Inside Functions or Blocks:
To declare a constant inside a function or `if` block, you would need to use `define()` instead of `const`. This is because `define()` can be used inside block scopes.

### Example of Using `define()` Inside a Function or Block:
```php
if (true) {
    define('MY_IF_CONST', "Hello"); // Valid
}

function myFunction() {
    define('MY_FUNC_CONST', "World"); // Valid
}

echo MY_IF_CONST; // Outputs: Hello
echo MY_FUNC_CONST; // Outputs: World
```

### Summary:
- **`const`** cannot be used inside functions or `if` blocks.
- **`define()`** can be used inside functions or block scopes.

