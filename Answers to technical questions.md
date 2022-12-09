# Answers to technical questions

## How long did you spend on the coding test? What would you add to your solution if you had more time? If you didn't spend much time on the coding test then use this as an opportunity to explain what you would add.

I spent about 3-4 hours on the test. If I had more time I would add:
- Store data in database and use query
- Redirect to 404 page
- Vue.js


## What was the most useful feature that was added to the latest version of your chosen language? Please include a snippet of code that shows how you've used it.

Nothing remarkable in 2022 but `replaceAll` was introduced to JavaScript in 2021 and it's very convenient for string manipulation.
```js
const str = 'JavaScript is my language of choice. I use JavaScript all the time.';
const newStr = p.replaceAll('JavaScript', 'TypeScript');

console.log(newStr);
//output: TypeScript is my language of choice. I use TypeScript all the time.
```

## How would you track down a performance issue in production? Have you ever had to do this?

I would try to replicate the issue in test environment and look up different tools that I can use give me more information.

I have never had to track and performance issues other than slow server that we needed to upgrade the package to the one with more resources.