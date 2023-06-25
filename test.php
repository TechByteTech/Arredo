<div class="counter">
  <span class="count">0</span>
</div>


<script type="text/javascript">

const countEl = document.querySelector('.count');

const updateCount = () => {
  const target = 1000;
  const count = +countEl.innerText;

  const speed = 10;
  const increment = target / speed;

  if (count < target) {
    countEl.innerText = Math.ceil(count + increment);
    setTimeout(updateCount, 100);
  } else {
    countEl.innerText = target;
  }
};

updateCount();

</script>
