<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 * 
 * Blogsonry: Modified to hide "Generated" content
 *
 * @package WordPress
 * @subpackage Blogsonry
 * @since Blogsonry 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer clear" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

<svg width="0" height="0" class="screen-reader">
  <defs>
    <polygon id="right-arrow" points="418.999,256.001 121.001,462 121.001,50 "/>
    <polygon id="chevron" points="142.332,104.886 197.48,50 402.5,256 197.48,462 142.332,407.113 292.727,256 "/>
		<polygon id="cross" points="438.393,374.595 319.757,255.977 438.378,137.348 374.595,73.607 255.995,192.225 137.375,73.622 73.607,137.352 192.246,255.983 73.622,374.625 137.352,438.393 256.002,319.734 374.652,438.378 "/>
		<path id="close" d="M256,50C142.229,50,50,142.229,50,256s92.229,206,206,206s206-92.229,206-206S369.771,50,256,50zM334.124,378.545l-77.122-77.117l-77.123,77.127l-41.425-41.449l77.106-77.117l-77.115-77.11l41.448-41.424l77.103,77.092l77.09-77.102l41.459,41.432l-77.104,77.108l77.113,77.102L334.124,378.545z"/>
		<path id="minus" d="M256,50C142.229,50,50,142.229,50,256s92.229,206,206,206s206-92.229,206-206S369.771,50,256,50zM382.601,293.432H135.399v-68.862h247.201V293.432z"/>
		<path id="plus" d="M256,50C142.229,50,50,142.229,50,256s92.229,206,206,206s206-92.229,206-206S369.771,50,256,50zM382.601,293.432h-89.17V382.6h-68.861v-89.168h-89.17v-68.862h89.17V135.4h68.861v89.169h89.17V293.432z"/>
		<path id="search" d="M460.5 387.2l-117.1-117.1C392.1 169.2 318.5 50 205 50c-84.7 0-153.6 68.9-153.6 153.6 0 111.7 115.7 185.4 216.3 140.2l118.1 118.1C419.4 464.7 463.4 421.9 460.5 387.2zM205 306.1c-56.5 0-102.5-46-102.5-102.5 0-56.5 46-102.5 102.5-102.5 56.5 0 102.5 46 102.5 102.5C307.5 260.1 261.5 306.1 205 306.1z"/>
		<path id="burger" d="M462,163.5H50v-65h412V163.5z M462,223.5H50v65h412V223.5z M462,348.5H50v65h412V348.5z"/>
		<path id="phone" d="M391.87,433.938L333.277,318.61c-0.13,0.065-32.86,16.473-34.37,17.154
		c-37.269,18.444-113.163-132.725-76.714-152.647l34.665-17.406L198.735,50c-0.039,0.019-34.492,17.347-35.069,17.642
		c-23.944,12.721-88.932,42.812,8.234,236.313c97.997,195.16,158.792,159.667,184.847,147.52
		C358.757,450.541,391.744,434.002,391.87,433.938z"/>
		<path id="podcast" d="M279.902,76.463c35.283-35.283,92.489-35.283,127.772,0s35.283,92.49,0,127.772
		c-25.112,25.112-53.473,25.63-59.551,26.573l-94.812-94.812C254.484,128.66,255.189,101.176,279.902,76.463z M240.068,165.107
		c-0.151,0.182-138.164,171.24-138.164,171.24l45.179,45.181c0,0,171.626-137.43,171.816-137.588L240.068,165.107z M323.774,445.652
		c-23.937-36.742-47.539-61.211-84.927-61.211c-39.346,0-57.312,24.507-82.681,40.435c-17.959,11.273-34.942,5.541-43.122-4.558
		c-2.955-3.648-11.471-16.713,3.025-31.669l-21.507-20.844c-23.555,24.304-19.381,53.354-4.792,71.364
		c16.745,20.672,50.397,31.114,82.32,11.072c27.211-17.084,39.256-35.851,66.756-35.851c17.79,0,34.004,7.964,59.832,47.608
		L323.774,445.652z"/>
		<path id="audio" d="M204.583,354.316h-73.292c-19.625,0-35.533-15.909-35.533-35.533V193.219
		c0-19.625,15.909-35.534,35.533-35.534h73.292V354.316z M244.519,148.871V363.13L416.242,462V50L244.519,148.871z"/>
		<path id="blog" d="M74.686,340.686L50,460.949l122.365-22.584L379.52,231.211l-97.68-97.68L74.686,340.686zM303.088,205.032l-181.891,181.89l-21.213-21.213l181.891-181.89L303.088,205.032z M462,148.731l-52.662,52.662l-97.682-97.68l52.662-52.663L462,148.731z"/>
		<path id="video" d="M319,317.084c0,20.94-16.976,37.916-37.916,37.916H87.916C66.976,355,50,338.024,50,317.084V194.916C50,173.976,66.976,157,87.916,157h193.168c20.94,0,37.916,16.976,37.916,37.916V317.084z M462,157l-113,68.5v61L462,355V157z"/>
		<path id="statement" d="M339.527,370.312H171.505v-30h168.022V370.312z M339.495,314.896h-167.99v-30h167.99V314.896zM339.495,259.562h-167.99v-30h167.99V259.562z M297.818,90v85.75h85.864V422H128.317V90H297.818 M322.818,50H88.317v412h335.365V150.75L322.818,50z"/>
    <polygon id="arrow-pointy" points="302.313,95.548 185.758,95.548 301.908,212.254 50,212.254 50,299.746 301.908,299.746 185.758,416.452 302.313,416.452 462,256 "/>
<path id="checkbox" d="M224.913,342.268l-77.401-77.423l32.956-32.962l44.443,44.454l102.606-102.605l32.972,32.949
	L224.913,342.268z M256,111c38.73,0,75.144,15.083,102.53,42.47S401,217.27,401,256s-15.083,75.144-42.47,102.53S294.73,401,256,401
	s-75.144-15.083-102.53-42.47S111,294.73,111,256s15.083-75.144,42.47-102.53S217.27,111,256,111z M256,71
	C153.827,71,71,153.828,71,256s82.827,185,185,185c102.172,0,185-82.828,185-185S358.172,71,256,71z"/>
        <path id="heart" d="M450.703,124.225C410.233,41.419,287.288,47.821,256,119.967c-31.288-72.146-154.233-78.548-194.703,4.257C13.59,221.837,124.309,314.82,256,448.014C387.691,314.82,498.41,221.837,450.703,124.225z"/>
    	<circle id="circle" cx="256" cy="256" r="206"/>
    <path id="tick" d="M50,236.16c47.389,9.879,111.237,24.502,157.389,54.545C261.584,218.087,356.056,148.706,462,92.873c-100.611,99.166-185.675,213.119-242.136,326.254C174.349,354.473,126.438,298.773,50,236.16z"/>
    <path id="users" d="M461.957,393.573H355.559c-0.005-115.799-57.887-60.76-57.887-162.232c0-36.629,23.98-56.51,54.772-56.51
	c45.495,0,77.158,43.439,34.075,124.666c-14.153,26.684,15.072,33.025,46.469,40.268
	C464.372,347.003,461.957,363.55,461.957,393.573z M289.119,325.89c-39.492-9.109-76.254-17.086-58.45-50.652
	c54.192-102.17,14.364-156.811-42.862-156.811c-58.354,0-97.202,56.736-42.861,156.811c18.337,33.771-19.809,41.738-58.452,50.652
	c-39.476,9.105-36.439,29.918-36.439,67.684h275.505C325.559,355.808,328.596,334.995,289.119,325.89z"/>
  <path id="thumb" d="M426.547,317.659c15.018-23.439,7.4-55.504-3.206-65.709c4.254-12.984,8.049-37.74-2.757-55.588
	c0,0-81.13-0.059-82.181,0c13.101-56.312,18.861-145.896-38.427-145.896c-31.705,0-39.472,28.578-48.243,56.697
	C215.463,223.442,129.099,224.6,77.039,230.42c0,41.252,0,133.077,0,179.348c79.606,0,119.613,6.578,188.043,35.68
	c71.917,30.586,161.004,21.398,151.177-61.133C435.389,365.415,434.831,335.417,426.547,317.659z M399.616,223.698
	c2.308,17.379-5.953,36.823-24.673,36.823H340.98c-12.972,0-17.506-10.606-17.506-19.198c0-7.316,6.367-17.625,18.107-17.625
	H399.616z M107.507,380.62c0-41.789,0-73.172,0-122.434c100.511-8.602,150.312-69.653,171.052-134.208
	c6.428-20.006,8.345-47.541,25.457-42.371c18.562,5.605,18.001,59.383,3.8,111.158c-6.062,22.105-22.153,40.672-8.477,67.227
	c-24.322,8.352-32.245,49.939-11.818,67.254c-16.217,15.859-15.723,47.547,3.992,62.713c-7.399,8.768-10.485,18.75-9.431,29.52
	C249.039,407.962,191.308,380.62,107.507,380.62z M355.1,432.024h-25.424c-12.493,0-18.085-8.201-18.085-16.58
	c0-9.816,6.344-18.57,18.085-18.57h56.687C385.311,410.312,379.33,432.024,355.1,432.024z M373.952,375.442h-51.221
	c-12.494,0-18.086-10.801-18.086-18.561c0-7.766,5.592-18.572,18.086-18.572h78.477C403.418,356.831,394.54,375.442,373.952,375.442
	z M380.649,317.2h-57.918c-12.438,0-18.101-11.062-18.101-18.578c0-7.605,5.597-18.248,18.101-18.248H404.9
	C407.217,297.507,399.352,317.2,380.649,317.2z"/>    
    
  </defs>
</svg>

</body>
</html>