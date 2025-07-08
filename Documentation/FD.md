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
- The calculator will have a simple web interface with buttons for digits (0-9), operations (+, -, ×, ÷), equals (=), and clear (C).
- The current input and result will be displayed in a dedicated display area.
- Buttons will be styled for clarity and ease of use.

## 2. Input Handling
- Clicking a digit or operator button appends the value to the current input.
- The clear (C) button resets the input and result display.
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