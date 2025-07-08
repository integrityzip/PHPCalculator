# OVERVIEW

#### This PHP Calculator will let people try out different types of calculations, like:
- Addition
- Subtraction
- Multiplication
- Division

#### The user can pick out numbers from 0 to 9, along with being able to clear any current inputs and remove the last number added.

---

# FUNCTIONAL DESIGN

## 1. User Interface
- The calculator will have a simple web interface with buttons for digits (0-9), operations (+, -, ×, ÷), a decimal point, equals (=), clear (C), and backspace (⌫).
- The current input and result will be displayed in a dedicated display area.
- Buttons will be styled for clarity and ease of use.

## 2. Input Handling
- Clicking a digit or operator button appends the value to the current input.
- The clear (C) button resets the input and result display.
- The backspace (⌫) button removes the last character from the input.
- Only valid sequences (e.g., no two operators in a row) are allowed.

## 3. Calculation Logic
- When the equals (=) button is pressed, the input string is parsed and evaluated according to standard operator precedence.
- Division by zero and invalid expressions will be handled gracefully, displaying an error message.
- The result is shown in the display area and can be used as the starting value for the next calculation.

## 4. Accessibility & Usability
- Buttons are accessible via mouse.
- The display is readable and updates in real time as the user interacts.

## 5. Error Handling
- Invalid inputs or operations (e.g., multiple operators, division by zero) will trigger user-friendly error messages.

---

# TECHNICAL DESIGN

## 1. Project Structure
- `index.php`: Main entry point, handles UI rendering and request processing.
- `Core/AutoLoader.php`: Implements class autoloading for modular code organization.
- `Core/Calculator.php`: Contains the core logic for parsing and evaluating expressions.
- `styles/style.css`: Styles for the calculator interface.

## 2. Class Design

### Calculator Class (`Core/Calculator.php`)
- **Properties:**
  - `$input` (string): The current input expression.
  - `$result` (float|string): The result or error message.
- **Methods:**
  - `setInput(string $input)`: Sets the input expression.
  - `evaluate()`: Parses and evaluates the input, returns result or error.
  - `clear()`: Resets the input and result.
  - `backspace()`: Removes the last character from the input.
  - `isValid()`: Validates the input for correct syntax.

### AutoLoader (`Core/AutoLoader.php`)
- Registers class autoloading for the `Core` namespace.

## 3. UI & Interaction Flow
- User interacts with calculator buttons (HTML form/buttons in `index.php`).
- Button clicks send data via POST or AJAX to `index.php`.
- `index.php` processes input, uses `Calculator` class to evaluate, and updates the display.
- Results and errors are shown in real time.

## 4. Expression Parsing & Evaluation
- Input is sanitized to prevent code injection.
- Expressions are parsed using regular expressions or a simple parser to handle operator precedence.
- Only allowed characters (digits, operators, decimal point) are processed.
- Division by zero and invalid syntax are detected and handled.

## 5. Error Handling
- All exceptions and invalid states are caught and converted to user-friendly messages.
- Errors are displayed in the calculator display area.

## 6. Security Considerations
- No direct use of `eval()` on user input.
- Input is validated and sanitized before evaluation.
- Output is escaped to prevent XSS.

## 7. Extensibility
- New operations can be added by extending the `Calculator` class and updating the UI.

---

# END OF TECHNICAL DESIGN
