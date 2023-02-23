<?php
/**
 * The template for displaying the footer
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->


</div><!-- #page -->


<?php if (is_single()) : ?>
<script
  src="https://maps.googleapis.com/maps/api/js?key=<?php echo API_KEY ?>&callback=initMap&v=weekly"
  defer
></script>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
