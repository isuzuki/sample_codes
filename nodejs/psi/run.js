/**
 * psi sample
 *
 * @see https://github.com/addyosmani/psi
 */

const psi = require('psi');

// get the PageSpeed Insights report
psi('http://yahoo.co.jp').then(data => {
  console.log('Speed score: '+ data.ruleGroups.SPEED.score);
  console.log('Usability score: '+ data.ruleGroups.USABILITY.score);
});

// output a formatted report to the terminal
psi.output('http://yahoo.co.jp').then(() => {
  console.log('done');
});
