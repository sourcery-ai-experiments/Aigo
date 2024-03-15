import sys

def calculate(num1, num2, operator):
    if operator == '+':
        return num1 + num2
    elif operator == '-':
        return num1 - num2
    elif operator == '*':
        return num1 * num2
    elif operator == '/':
        if num2 != 0:
            return num1 / num2
        else:
            return "Division by zero error"
    else:
        return "Invalid operator"

if __name__ == "__main__":
    if len(sys.argv) != 4:
        print("Usage: calculate.py <num1> <num2> <operator>")
        sys.exit(1)
    
    num1 = float(sys.argv[1])
    num2 = float(sys.argv[2])
    operator = sys.argv[3]

    result = calculate(num1, num2, operator)
    print(result)

