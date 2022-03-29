var data = [
  { type: "Foo", year: 1995 },
  { type: "Bar", year: 1993 },
  { type: "Foobar", year: 2020 },
];

function compare(a, b) {
  if (a.year < b.year) {
    return -1;
  }
  if (a.year > b.year) {
    return 1;
  }
  return 0;
}

const result = data.sort(compare);

console.log(result);
