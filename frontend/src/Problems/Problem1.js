import React, { useState } from 'react';
import './Problem.css';

const Problem1 = () => {
  const [input, setInput] = useState('');
  const [output, setOutput] = useState('');

  const solveProblem = async () => {
    // Split the input by newline to get individual lines
    const inputLines = input.trim().split('\n');
  
    if (inputLines.length < 2) {
      setOutput('Invalid input format. Maximum characters per line: 2');
      return;
    }

  
    // Extract the necessary values from the input lines
    const [n, k] = inputLines[0].split(' ').map((num) => parseInt(num));
    const [rq, cq] = inputLines[1].split(' ').map((num) => parseInt(num));
    const obstacles = inputLines.slice(2).map((line) => line.split(' ').map((num) => parseInt(num)));
  
    // Create the payload object
    const payload = {
      n,
      k,
      rq,
      cq,
      obstacles,
    };
  
    // Send AJAX request to the backend API
    const response = await fetch('http://localhost:8000/api/problem-1', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ input: JSON.stringify(payload) }),
    });
  
    // Parse the JSON response
    const data = await response.json();
  
    // Set the output state with the received solution
    setOutput(data.solution);
  };

  return (
    <div>
      <textarea
        id="input-1"
        value={input}
        onChange={(e) => setInput(e.target.value)}
      ></textarea>
      <button onClick={solveProblem} className='btn-solution'>Solve Problem</button>
      <pre id="output-1">{output}</pre>
      <p> Note: You need to type 2 numbers per line, separated by a space. </p>
    </div>
  );
};

export default Problem1;