<div class = "research">
<hr class = "content__course-break">
  <?php if (get_field('research_project_url')): ?>
  <a class = "research__title" href = "<?php echo get_field('research_project_url')?>" target = "_blank">
    <?php echo get_field("research_location") . " (" . get_field("research_professor") . ")"?>
  </a>
<? else: ?>
    <h4 class = "research__title">
      <?php echo get_field("research_location") . " (" . get_field("research_professor") . ")"?>
    </h4>
  <? endif ?>
  <p class = "research__body">
    <?php echo get_field("research_summary")?>
  </p>
</div>