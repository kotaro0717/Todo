/**
 * @fileoverview Todo Javascript
 * @author kotaro.hokada@gmail.com (Kotaro Hokada)
 */


/**
 * Todo Javascript
 *
 * @param {string} Controller name
 * @param {function(scope, http, sce, timeout)} Controller
 */
NetCommonsApp.controller('Todo',
    function($scope , $http, $sce, $timeout) {

      /**
       * frame id
       *
       * @type {number}
       */
      $scope.frameId = 0;

      /**
       * Initialize
       *
       * @param {int} frame id
       * @return {void}
       */
      $scope.initialize = function(frameId) {
        $scope.frameId = frameId;
      };

      /**
       * Open Additional Task
       *
       * @return {void}
       */
      $scope.openAdditionalTask = function() {
        $('.todo-additional-task:first',
          '#frame-wrap-' + $scope.frameId).modal('show');
      };

      /**
       * Open Block Setting
       *
       * @return {void}
       */
      $scope.openBlockSetting = function() {
      };
    }
);
